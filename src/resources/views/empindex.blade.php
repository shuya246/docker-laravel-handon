@extends('layouts.template')

@section('main')
<div class="container">
<h3>従業員管理画面</h3>
<a href="{{ route('emparchive') }}" class="list-group-item list-group-item-action">従業員一覧へ</a>
<a href="{{ route('empcreate') }}" class="list-group-item list-group-item-action">従業員新規登録へ</a>
</div>
    
@endsection