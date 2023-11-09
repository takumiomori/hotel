@extends('layouts.hotel')

@section('title','予約システム')

@section('content')
<div class="content_title">部屋</div>
<table>
    <tr><th>部屋ID</th><th>部屋カテゴリー</th><th>部屋名</th><th>部屋番号</th></tr>
    @foreach($items as $item)
    <tr><td>{{$item->id}}</td><td>{{$item->room_category->name}}</td><td>{{$item->name}}</td><td>{{$item->number}}</td></tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection