<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create() {
      //Goi view để hiển thị form thêm mới
      // + Tạo view:
      // resources/views
      //                /products/create.blade.php
      //                         /index.blade.php
      //                         /update.blade.php
      //                         /detail.blade.php
      //                /layouts/
      //                        /main.blade.php

      // + Gọi view, cơ chế gọi view giống hết hàm render MVC
      return view('products/create');

    }

    // Mọi phương thức của Laravel đều có thể truyền
    // đc obj của class Request
    public function createSave(Request $request) {
//      $requests = $request->all();
//      dd($requests);
      //Validate form thông qua các rule của Laravel
      $rules = [
          'name' => ['required', 'min:3'],
          'price' => ['required', 'numeric'],
          'avatar' => ['image', 'size:2024']
      ];
      $messages = [
          'name.required' => 'Tên phải nhập',
          'name.min' => 'Tên ít nhất 3 ký tự',
          'price.required' => 'Giá phải nhập',
          'price.numeric' => 'Giá phải là số',
          'avatar.image' => 'Phải upload ảnh',
          'avatar.size' => 'Dung lượng max = 2Mb'
      ];
      $request->validate($rules, $messages);

      // Xử lý lưu thông tin vào bảng products
     // Lấy tất cả thông tin từ form
        $requests = $request->all();
        // Thêm phần tử tương ứng với key = avatar
        $requests['avatar'] = '';
        $requests['description'] = 'des demo';
        // Gọi model để nhờ thêm mới vào bảng: MVC
        // Trong Laravel có 2 cơ chế tương tác với CSDL:
        // + Query Builder: giống như câu truy vấn thuần
        // + Eloquent: là model -> ưu tiên dùng Eloquent
        // Dùng cơ chế Eloquent để tương tác với CSDL
        $product = Product::create($requests);
//        dd($product);
        if (!empty($product)) {
            //Thao tác với session sử dụng hàm có sẵn
            session()->put('success', 'Thêm mới thành công');
        } else {
            session()->put('error', 'Thêm mới thất bại');
        }
        //Chuyển hướng trong Laravel
        return redirect('danh-sach-san-pham.html');
    }

    public function index() {
        // Lấy tất cả bản ghi trong bảng products theo cơ chế phân trang: dùng cơ chế Eloquent
        $products = Product::paginate(1);

        // Gọi view để hiển thị danh sách
        return view('products/index', [
            'products' => $products
        ]);
    }
}
