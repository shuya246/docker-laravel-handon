@extends('layouts.template')

@section('main')
 @foreach ($coupons as $coupon)
<p>{{ $coupon->title }}</p>
<p>{{ $coupon->introduction }}</p>
<p>{{ $coupon->body }}</p>
<p>{{ $coupon->time }}</p>
<p>{{ $coupon->start }}</p>
<p>{{ $coupon->end }}</p>
<p>{{ $coupon->memo }}</p>
 @endforeach   
@endsection