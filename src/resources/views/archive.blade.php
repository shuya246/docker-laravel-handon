@extends('layouts.template')

@section('main')
 @foreach ($coupons as $coupon)
 <div class="card mb-3" style="max-width:25rem;">
    <div class="card-header">
        <h3>タイトル</h3>
        <p>{{ $coupon->title }}</p>
    </div>
    <div class="card-body">
        <h3 class="card-title">説明</h3>
        <p class="card-text">{{ $coupon->introduction }}</p>
        <h3 class="card-title">本文</h3>
        <p class="card-text">{{ $coupon->body }}</p>
        <h3 class="card-title">使用回数</h3>
        <p class="card-text">{{ $coupon->time }}</p>
        <h3 class="card-title">開始</h3>
        <p class="card-text">{{ $coupon->start }}</p>
        <h3 class="card-title">終了</h3>
        <p class="card-text">{{ $coupon->end }}</p>
        <h3 class="card-title">補足</h3>
        <p class="card-text">{{ $coupon->memo }}</p>
        <form action="{{ route('delete', $coupon->id) }}" method="POST">
            @csrf
            <input type="submit" value="削除する">
        </form>
    </div>
</div>
 @endforeach   
@endsection