@extends('layouts.default')
@section('login')
<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    /* ログイン */
    .login{
        border-radius:5px 5px;
        box-shadow: 1px 1px 5px black;
        width:300px;
        margin:50px auto;
    }
    .login>h2{
        font-size:16px;
        background: #3366CC;
        color:#FFFFFF;
        padding:10px;
        border-radius:5px 5px 0 0;
    }
    .login>form{
        padding:20px;
    }
    .login>form>div{
        display:flex;
        margin-bottom:10px;
    }
    img{
        width:20px;
        margin-right:5px;
    }
    .login>form>div>input{
        border:none;
        border-bottom: 1px solid black;
        width:100%;
    }
    .login>form>button{
        background: #3366CC;
        border-radius:5px 5px;
        color:#FFFFFF;
        border:none;
        padding:5px 20px;
        margin-left: 60%;
    }
</style>
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