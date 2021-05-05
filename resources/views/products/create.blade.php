<?php
/** resources/views/products/create.blade.php
 */
?>

@extends('layouts.main')
@section('page_title', 'Trang thêm mới sp')
@section('content')
    <h1>Form thêm mới sp</h1>
    <form action="{{ url('product/createSave') }}"
    method="post" enctype="multipart/form-data">
        {{--Chống lỗi bảo mật CSRF Token--}}
        @csrf
        Tên sp:
        <input type="text" name="name"
       value="{{ old('name') }}" />
        <br />
        Giá sp:
        <input type="text" name="price"
               value="{{ old('price') }}" />
        <br />
        Ảnh đại diện:
        <input type="file" name="avatar" />
        <br />
    <input type="submit" name="submit" value="Save"/>
    </form>
@endsection


{{--composer install--}}

