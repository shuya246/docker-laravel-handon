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
        <div class="card mb-3" style="max-width:25rem;">
           <div class="card-header">
               <h3>タイトル</h3>
               <p>{{ $coupon->title }}</p>
           </div>
           <div class="card-body">
               <h3 class="card-title">説明</h3>
               <p class="card-text">{{ $coupon->introduction }}</p>
               <h3 class="card-title">本文</h3>
               <p class="card-text">{{ $coupon->body }}</p>
               <h3 class="card-title">使用回数</h3>
               <p class="card-text">{{ $coupon->time }}</p>
               <h3 class="card-title">開始</h3>
               <p class="card-text">{{ $coupon->start }}</p>
               <h3 class="card-title">終了</h3>
               <p class="card-text">{{ $coupon->end }}</p>
               <h3 class="card-title">補足</h3>
               <p class="card-text">{{ $coupon->memo }}</p>
           </div>
       </div>
        @endforeach
    </main>
    <footer>
    <a href="{{ route('logout') }}">ログアウト</a>
    
    </footer>
</body>

