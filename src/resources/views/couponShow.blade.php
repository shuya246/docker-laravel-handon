@extends('layouts.template')

@section('main')
 <h2>クーポン管理画面</h2>
<a href="{{ route('archive') }}">クーポン一覧</a>
 <a href="#">クーポン新規作成</a>
 <a href="#">クーポン削除</a>
@endsection