@extends('layouts.default')
@section('contents')
<link rel="stylesheet" href="{{ asset('css\login.css') }}">
<div class="login">
    <h2>Login</h2>
    <form action="/login" method="post">
    @csrf
        <div>
            <img src="{{asset('storage/mail.png')}}" alt="メールのアイコン">
            <input type="email" name="email">
        </div>
        <div>
        <img src="{{asset('storage/lock.png')}}" alt="パスワードのアイコン">
            <input type="password" name="password">
        </div>
        <button type="submit">ログイン</button>
    </form>
</div>
@endsection