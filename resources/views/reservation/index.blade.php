@extends('layouts.hotel')

@section('title','予約システム')

@section('content')
<div class="content_title">予約</div>
<table>
    <tr><th>予約ID</th><th>利用者名</th><th>人数</th><th>チェックイン日付</th><th>チェックアウト日付</th></tr>
    @foreach($items as $item)
    <tr><td>{{$item->id}}</td><td>{{$item->guest->name}}</td><td>{{$item->number_guests}}</td><td>{{$item->checkin}}</td><td>{{$item->checkout}}</td></tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection