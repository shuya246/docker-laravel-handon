@extends('layouts.template')

@section('main')
<h2>従業員管理画面</h2>
<a href="{{ route('emparchive') }}">従業員一覧へ</a>
<a href="{{ route('empcreate') }}">従業員新規登録へ</a>
    <a href="#">従業員削除へ</a>
@endsection