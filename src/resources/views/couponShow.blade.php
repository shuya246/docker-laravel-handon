@extends('layouts.template')

@section('main')
<div class="container">
    
        <h3>クーポン管理画面</h3>
            <div class="list-group">
            <a href="{{ route('archive') }}" class="list-group-item list-group-item-action">クーポン一覧</a>
            <a href="{{ route('showCreate') }}"class="list-group-item list-group-item-action">クーポン新規作成</a>
            </div>
    
</div>
@endsection