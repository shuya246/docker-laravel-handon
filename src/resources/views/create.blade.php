@extends('layouts.template')

@section('main')
<form action="{{ route('create') }}" method="POST">
    @csrf
<label>タイトル</label>
<input type="text" name="title" value="">
<label>説明</label>
<textarea name="introduction"></textarea>
<label>本文</label>
<textarea name="body"></textarea>
<label>回数</label>
<input type="text" name="time" value="">
<label>開始</label>
<input type="text" name="start" value="" placeholder="yyyymmdd">
<label>終了</label>
<input type="text" name="end" value="" placeholder="yyyymmdd">
<label>メモ</label>
<textarea name="memo"></textarea>
<input type="submit" value="登録する">
</form>
@endsection
