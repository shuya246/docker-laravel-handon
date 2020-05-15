@extends('layouts.template')

@section('main')
<div class="index_container">
<a href="{{route('show')}}">
        <img src="imgs/coupons.png" alt="クーポン管理画面">
        <p>クーポン管理一覧</p>
    </a>
</div>

<div class="index_container">
    <a href="#">
        <img src="imgs/employees.png" alt="従業員管理画面">
        <p>従業員管理画面</p>
    </a>
</div>

<div class="index_container">
    <a href="#">
        <img src="imgs/management.png" alt="管理者画面">
        <p>管理者画面</p>
    </a>
</div>
@endsection
