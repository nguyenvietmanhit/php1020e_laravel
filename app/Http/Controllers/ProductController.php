<?php

namespace App\Http\Controllers;

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

      // + Gọi view
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

    }
}
