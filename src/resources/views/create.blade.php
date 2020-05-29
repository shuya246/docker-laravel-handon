@extends('layouts.template')

@section('main')
<form action="{{ route('create') }}" method="POST">
    @csrf
<div class="form-group">
    <label for="title">タイトル</label>
    <input type="text" name="title" value="{{ old('title') }}" class="form-control">
    @if ($errors->first('title'))
    <p class="form-text text-muted">*{{ $errors->first('title') }}</p>
@endif
</div>
<div class="form-group">
    <label for="introduction">説明</label>
    <textarea name="introduction" class="form-control" rows="3"></textarea>
    @if ($errors->first('introduction'))
    <p class="form-text text-muted">*{{ $errors->first('introduction') }}</p>
    @endif
</div>
    <div class="form-group">
    <label for="body">本文</label>
    <textarea name="body" class="form-control" rows="3"></textarea>
    @if ($errors->first('body'))
    <p class="form-text text-muted">{{ $errors->first('body') }}</p>
    @endif
</div>
<div class="form-group">
    <label for="time">回数</label>
    <input type="text" name="time" value="{{ old('time') }}" class="form-control">
    @if ($errors->first('time'))
    <p class="form-text text-muted">{{ $errors->first('time') }}</p>
    @endif
</div>
<div class="form-group">
    <label for="start">開始</label>
    <input type="text" name="start" value="" placeholder="yyyymmdd" value="{{ old('start') }}" class="form-control">
    @if ($errors->first('start'))
    <p class="form-text text-muted">{{ $errors->first('start') }}</p>
    @endif
</div>
<div class="form-group">
<label>終了</label>
<input type="text" name="end" value="" placeholder="yyyymmdd" value="{{ old('end') }}" class="form-control">
@if ($errors->has('end'))
<p class="form-text text-muted">{{ $errors->first('end') }}</p>
@endif
</div>
<div class="form-group">
<label for="memo">メモ</label>
<textarea name="memo" class="form-control" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">登録</button>
</form>
@endsection
