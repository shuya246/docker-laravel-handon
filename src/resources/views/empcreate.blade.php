@extends('layouts.template')

@section('main')
<form action="{{ route('empcreate') }}" method="POST">
    @csrf
<label>氏名</label>
<input type="text" name="name" value="">
@if ($errors->has('name'))
<p>{{ $errors->first('name') }}</p>
@endif
<label>メールアドレス</label>
<input type="text" name="email" value="">
@if ($errors->has('email'))
<p>{{ $errors->first('email') }}</p>
@endif
<label>パスワード</label>
<input type="password" name="password" value="">
@if ($errors->has('password'))
<p>{{ $errors->first('password') }}</p>
@endif
<label>権限</label>
<select name="role">
    <option value="owner">owner</option>
    <option value="staff">staff</option>
</select>
@if ($errors->has('role'))
<p>{{ $errors->first('role') }}</p>
@endif
<input type="submit" value="登録する">
</form>
@endsection