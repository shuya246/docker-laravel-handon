@extends('layouts.template')

@section('main')
<form action="{{ route('create') }}" method="POST">
    @csrf
<label>タイトル</label>
<input type="text" name="title" value="{{ old('title') }}">
@if ($errors->first('title'))
<p class="varidation">*{{ $errors->first('title') }}</p>
@endif
<label>説明</label>
<textarea name="introduction"></textarea>
@if ($errors->first('introduction'))
<p class="varidation">*{{ $errors->first('introduction') }}</p>
@endif
<label>本文</label>
<textarea name="body"></textarea>
@if ($errors->first('body'))
<p class="varidation">{{ $errors->first('body') }}</p>
@endif
<label>回数</label>
<input type="text" name="time" value="{{ old('time') }}">
@if ($errors->first('time'))
<p class="varidation">{{ $errors->first('time') }}</p>
@endif
<label>開始</label>
<input type="text" name="start" value="" placeholder="yyyymmdd" value="{{ old('start') }}">
@if ($errors->first('start'))
<p class="varidation">{{ $errors->first('start') }}</p>
@endif
<label>終了</label>
<input type="text" name="end" value="" placeholder="yyyymmdd" value="{{ old('end') }}">
<label>メモ</label>
<textarea name="memo"></textarea>
<input type="submit" value="登録する">
</form>
@endsection
