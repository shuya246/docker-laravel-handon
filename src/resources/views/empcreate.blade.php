@extends('layouts.template')

@section('main')
<form action="{{ route('empcreate') }}" method="POST">
    @csrf
<label>氏名</label>
<input type="text" name="name" value="">
<label>メールアドレス</label>
<input type="text" name="email" value="">
<label>パスワード</label>
<input type="password" name="password" value="">
<label>権限</label>
<input type="text" name="role" value="" placeholder="owner or staff">
<input type="submit" value="登録する">
</form>
@endsection