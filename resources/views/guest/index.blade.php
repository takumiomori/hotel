@extends('layouts.hotel')

@section('title','予約システム')

@section('content')
<div class="content_title">お客様情報</div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">利用者ID</th>
        <th scope="col">氏名</th>
        <th scope="col">住所</th>
        <th scope="col">電話番号</th>
      </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->tel}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection