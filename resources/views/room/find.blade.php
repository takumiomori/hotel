@extends('layouts.customer')

@section('title','TheMana Village')

@section('image')
<img class="entrance_img" src="{{ asset('img/themanavillage.jpg') }}" alt="">
@endsection

@section('content')
@if(isset($msg))
<div class="alert alert-dark" role="alert">{{$msg}}</div>
@endif
<div class="content_title">空室検索</div>
@if(count($errors)>0)
<div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="content_area">
    <form action="/room/find" method="post">
    @csrf
    <div class="content_sub_title">ご希望の部屋タイプ・お部屋数を指定</div>
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="room_category_id">
        <option selected>ご希望の部屋タイプをお選びください</option>
        <option value="1">和室A</option>
        <option value="2">和室B</option>
        <option value="3">洋室A</option>
        <option value="4">洋室B</option>
        <option value="5">和スイート</option>
        <option value="6">洋スイート</option>
      </select><br>
    <input class="form-control form-control-lg margintop" type="number" placeholder="ご希望の部屋数" 
    name="number_of_room" value="{{old('number_of_room')}}"><br>
    <div class="content_sub_title">チェックイン</div>
    <input class="form-control form-control-lg" type="date" placeholder="チェックイン" name="checkin" value="{{old('checkin')}}"><br>
    <div class="content_sub_title">チェックアウト</div>
    <input class="form-control form-control-lg" type="date" placeholder="チェックアウト" name="checkout" value="{{old('checkout')}}"><br>
    <input class="submit_btn" type="submit" value="指定した条件で検索">
</form>
</div>
@endsection

@section('footer')
copyright 2023 Omori.
@endsection