@extends('layouts.template')

@section('main')
<form action="{{ route('empcreate') }}" method="POST">
    @csrf
<div class="form-group">
    <label for="name">氏名</label>
    <input type="text" name="name" value="" class="form-control">
    @if ($errors->has('name'))
    <p class="torm-text text-muted">{{ $errors->first('name') }}</p>
    @endif
</div>
<div class="form-group">
    <label for="email">メールアドレス</label>
    <input type="text" name="email" value="" class="form-control">
    @if ($errors->has('email'))
    <p class="form-text text-muted">{{ $errors->first('email') }}</p>
    @endif
</div>
<div class="form-group">
    <label for="password">パスワード</label>
    <input type="password" name="password" value="" class="form-control" placeholder="半角英数字6文字以上">
    @if ($errors->has('password'))
    <p class="form-text text-muted">{{ $errors->first('password') }}</p>
    @endif
</div>
<div class="form-group">
<label for="role">権限</label>
    <select name="role">
        <option value="owner">owner</option>
        <option value="staff">staff</option>
    </select>
    @if ($errors->has('role'))
    <p>{{ $errors->first('role') }}</p>
    @endif
</div>
<button type="submit" class="btn btn-primary">登録</button>
</form>
@endsection