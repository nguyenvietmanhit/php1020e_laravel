<?php
/**
 * resources/views/products/index.blade.php
 */

?>

@extends('layouts.main')
@section('page_title', 'Liệt kê sản phẩm')

@section('content')
    <h1>Danh sách sản phẩm</h1>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Avatar</th>
            <th>Description</th>
            <th>Created_at</th>
            <th></th>
        </tr>
        @foreach($products AS $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price) }}</td>
                <td>
                    <img src="" height="50px" />
                </td>
                <td>{!! $product->description !!}</td>
                <td>{{ date('d-m-Y', strtotime($product->created_at)) }}</td>
                <td>
                    <a href="{{ url('product/update/' . $product->id) }}">Update</a>
                    <a href="{{ url('product/delete/' . $product->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $products->links() }}
@endsection
