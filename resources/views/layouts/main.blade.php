<?php
/**
 * main.blade.php
 * File layout chính của ứng dụng
 */
// Tạo css, js, images mẫu
//public/
//      /css/app.css
//          /style.css
//      /js/app.js
//         /script.js
//      /images
?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link rel="stylesheet"
          href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet"
          href="{{ asset('css/style.css') }}"/>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
<div class="header">
    <h1>Đây là header</h1>
</div>
<div class="main">
    {{--errors--}}
    @if($errors->any())
        @foreach($errors->all() AS $error)
            <p style="color: red">
                {{ $error }}
            </p>
        @endforeach
    @endif

    @yield('content')
</div>
<div class="footer">
    <h1>Đây là footer</h1>
</div>

</body>
</html>

