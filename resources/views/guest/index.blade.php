@extends('layouts.hotel')

@section('title','予約システム')

@section('content')
<div class="content_title">お客様情報</div>
<table>
    <tr><th>利用者ID</th><th>氏名</th><th>住所</th><th>電話番号</th></tr>
    @foreach($items as $item)
    <tr><td>{{$item->id}}</td><td>{{$item->name}}</td><td>{{$item->address}}</td><td>{{$item->tel}}</td></tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection