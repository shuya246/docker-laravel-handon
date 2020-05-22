@extends('layouts.template')

@section('main')
 @foreach ($coupons as $coupon)
<h3>タイトル</h3>
<p>{{ $coupon->title }}</p>
<h3>説明</h3>
<p>{{ $coupon->introduction }}</p>
<h3>本文</h3>
<p>{{ $coupon->body }}</p>
<h3>使用回数</h3>
<p>{{ $coupon->time }}</p>
<h3>開始</h3>
<p>{{ $coupon->start }}</p>
<h3>終了</h3>
<p>{{ $coupon->end }}</p>
<h3>補足</h3>
<p>{{ $coupon->memo }}</p>
<form action="{{ route('delete', $coupon->id) }}" method="POST">
    @csrf
    <input type="submit" value="削除する">
</form>
 @endforeach   
@endsection