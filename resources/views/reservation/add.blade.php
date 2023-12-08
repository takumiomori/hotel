@extends('layouts.customer')

@section('title','TheMana Village')

@section('content')
@if(isset($msg))
<div class="alert alert-primary" role="alert">{{$msg}}</div>
@endif

        @if(isset($items))
        <div class="content_sub_title">検索結果</div>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">部屋番号</th>
                <th scope="col">宿泊料（お1人様あたり）</th></tr>
        </thead>
        <tbody>
        @foreach($items as $item)
        <tr>
            <td>{{$item->number}}</td>
            <td>{{$item->price}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
        @endif

<div class="content_title">予約</div>
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
    <form action="/reservation/add" method="post">
    @csrf
    
    <input class="form-control form-control-lg" type="number" placeholder="お客様ID" name="guest_id" value="{{old('guest_id')}}"><br>
    <input class="form-control form-control-lg" type="number" placeholder="ご利用人数" name="number_guests" value="{{old('number_guests')}}"><br>
    <div class="content_sub_title">ご希望の部屋番号を指定</div>
    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="room_id">
        <option selected>ご希望の部屋番号をお選びください</option>
        <option value="1">101 鯨</option>
        <option value="2">102 鰹</option>
        <option value="3">103 鮎</option>
        <option value="4">104 靭</option>
        <option value="5">105 鰯</option>
        <option value="6">106 鱧</option>
        <option value="7">107 鰻</option>
        <option value="8">108 鯛</option>
        <option value="9">109 鯖</option>
        <option value="10">201 桜</option>
        <option value="11">202 紅葉</option>
        <option value="12">203 鬼灯</option>
        <option value="13">204 花見月</option>
        <option value="14">205 牡丹</option>
        <option value="15">206 藤</option>
        <option value="16">207 秋桜</option>
        <option value="17">208 紫陽花</option>
        <option value="18">209 楓</option>
        <option value="19">301 椿</option>
        <option value="20">302 楊梅</option>
        <option value="21">303 山桜桃梅</option>
        <option value="22">304 浜薊</option>
        <option value="23">305 菫</option>
        <option value="24">306 朝顔</option>
      </select>
    <br>
    <div class="content_sub_title margintop">チェックイン</div>
    <input class="form-control form-control-lg" type="date" placeholder="チェックイン" name="checkin" value="{{old('checkin')}}"><br>
    <div class="content_sub_title">チェックアウト</div>
    <input class="form-control form-control-lg" type="date" placeholder="チェックアウト" name="checkout" value="{{old('checkout')}}"><br>
    <input class="submit_btn" type="submit" value="予約">
</form>
</div>

@endsection

@section('footer')
copyright 2023 Omori.
@endsection