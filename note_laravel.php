<?php
/**
 * note_laravel.php
 * Framework Laravel
 * - Viết bằng PHP, sử dụng OOP và MVC
 * - Framework thông dụng nhất của PHP: Zend, Cake,
 * Code Igniter, Yii ...
 * - Thực tế: CMS, Framework
 * + Composer: composer create ...
 * LÀ 1 phần mềm quản lý thư viện liên quan đến
 * FW (dependency) - FW tích hợp thư viện của bên
 * thứ 3 để có thể hoạt động -> vendor chứa thư
 * viện của bên thứ 3
 * + Demo CRUD sản phẩm bằng Laravel
 * - Chuẩn bị CSDL và bảng
 * + Tự tìm hiểu cơ chế migrate của LAravel
 * để tạo bảng tự động sử dụng lệnh artisan
 * + Tạo CSDL: php1020e_laravel
 *
CREATE DATABASE IF NOT EXISTS
php1020e_laravel
CHARACTER SET utf8 COLLATE utf8_general_ci;
 * + Tạo bảng bằng cơ chế migrate của Laravel:
 * sử dụng artisan của Laravel
 *
 * php artisan make:migration create_table_products
 * php artisan migrate
 * + Tạo controller, model chuẩn LAravel bằng
 * artisan
 * php artisan make:controller ProductController
 * php artisan make:model Product
 */