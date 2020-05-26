<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <header>
    <h1>coupon app</h1>
    </header>
    <main>
            @foreach ($coupons as $coupon)
        <p>{{ $coupon->title }}</p>
        <h3>説明</h3>
        <p>{{ $coupon->introduction }}</p>
        <h3>本文</h3>
        <p>{{ $coupon->body }}</p>
        <h3>使用回数</h3>
        <p>{{ $coupon->time }}</p>
        <h3>開始</h3>
        <p>{{ $coupon->start }}</p>
        <h3>終了</h3>
        <p>{{ $coupon->end }}</p>
        <h3>補足</h3>
        <p>{{ $coupon->memo }}</p>
            @endforeach   
    </main>
    <footer>
    <a href="{{ route('logout') }}">ログアウト</a>
    
    </footer>
</body>

