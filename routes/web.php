<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
// định nghĩa url cho chức năng, Laravel có chuẩn
// RESTFUL: GET, POST, PUT, PATCH, DELETE
// Route thêm mới sản phẩm:
Route::get('product/create', [ProductController::class, 'create']);
//public/product/create
// Route lưu sp của chức năng thêm mới
Route::post('product/createSave', [ProductController::class, 'createSave']);

// Route hiển thị sản phẩm
Route::get('danh-sach-san-pham.html', [ProductController::class, 'index']);
