<?php
//database/migrations/
// Laravel sử dụng cơ chế autoload để tự động
// nhúng file khi gọi class: namespace: cấu trúc
//thư mục tới file đó, use <namspace>
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
        //Code tạo các trường cho bảng products
        //id,name,price,avatar,description,
        //created_at,updated_at
          $table->increments('id');
          $table->string('name', 150);
          $table->integer('price');
          $table->string('avatar', 200);
          $table->text('description');
          // tạo ra trường created_at và updated_at
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
