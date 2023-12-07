@extends('layouts.hotel')

@section('title','予約システム')

@section('content')
<div class="content_title">予約一覧</div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">予約ID</th>
        <th scope="col">利用者ID</th>
        <th scope="col">利用者名</th>
        <th scope="col">電話番号</th>
        <th scope="col">人数</th>
        <th scope="col">部屋番号</th>
        <th scope="col">部屋種ID</th>
        <th scope="col">チェックイン日付</th>
        <th scope="col">チェックアウト日付</th>
        <th scope="col">宿泊料</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($items as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->guest->id}}</td>
        <td>{{$item->guest->name}}</td>
        <td>{{$item->guest->tel}}</td>
        <td>{{$item->number_guests}}</td>
        <td>{{$item->room->first()->number}}</td>
        <td>{{$item->room->first()->room_category_id}}</td>
        <td>{{$item->checkin}}</td>
        <td>{{$item->checkout}}</td>
        <td>{{$item->room->first()->pivot->price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection