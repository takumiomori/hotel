@extends('layouts.hotel')

@section('title','予約システム')

@section('content')
<div class="content_title">部屋</div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">部屋ID</th>
        <th scope="col">部屋カテゴリー</th>
        <th scope="col">部屋名</th>
        <th scope="col">部屋番号</th>
        <th scope="col">収容人数</th>
      </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->room_category->name}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->number}}</td>
        <td>{{$item->room_category->capacity}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection