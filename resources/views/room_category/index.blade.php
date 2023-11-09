@extends('layouts.hotel')

@section('title','予約システム')

@section('content')
<div class="content_title">部屋種別マスタ</div>
<table>
    <tr><th>部屋カテゴリーID</th><th>部屋種名</th><th>宿泊可能人数</th></tr>
    @foreach($items as $item)
    <tr><td>{{$item->id}}</td><td>{{$item->name}}</td><td>{{$item->capacity}}</td></tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection