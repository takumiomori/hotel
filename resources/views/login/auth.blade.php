@extends('layouts.hotel')

@section('title','予約システム ユーザ認証')

@section('content')
<p class="alert_message">{{$message}}</p>
<form action="/login/auth" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">メールアドレス</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="例）address@email.co.jp" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">パスワード</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="半角英数文字８文字以上" name="password">
    </div>
    <input type="submit" class="btn btn-primary" value="認証">
</form>

@endsection

@section('footer')
copyright 2023 Omori.
@endsection