@extends('layouts.hotel')

@section('title','予約システム')

@section('content')
<div class="content_title">部屋種別マスタ</div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">部屋カテゴリーID</th>
        <th scope="col">部屋種名</th>
        <th scope="col">宿泊可能人数</th>
      </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->capacity}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection