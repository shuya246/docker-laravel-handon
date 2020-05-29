@extends('layouts.template')

@section('main')
<div class="text-center">
<h3 class="text-center">こんにちは　{{$user->name}}さん</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col">
        <a href="{{route('show')}}">
                <img src="imgs/coupons.png" alt="クーポン管理画面">
                <p>クーポン管理一覧</p>
            </a>
        </div>

        <div class="col">
        <a href="{{ route('empindex') }}">
                <img src="imgs/employees.png" alt="従業員管理画面">
                <p>従業員管理画面</p>
            </a>
        </div>
    </div>
</div>
@endsection
