@extends('layouts.customer')

@section('title','TheMana Village')

@section('content')
<div class="content_title">会員登録</div>
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
    <form action="/guest/add" method="post">
    @csrf
    <input class="form-control form-control-lg" type="text" placeholder="お名前" name="name" value="{{old('name')}}"><br>
    <input class="form-control form-control-lg" type="text" placeholder="住所" name="address" value="{{old('address')}}"><br>
    <input class="form-control form-control-lg" type="text" placeholder="電話番号" name="tel" value="{{old('tel')}}"><br>
    <input class="submit_btn" type="submit" value="登録">
</form>
</div>

@endsection

@section('footer')
copyright 2023 Omori.
@endsection