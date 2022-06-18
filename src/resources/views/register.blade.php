@extends('layouts.default')
@section('register')
<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    /* 登録 */
    .register{
        border-radius:5px 5px;
        box-shadow: 1px 1px 5px black;
        width:300px;
        margin:50px auto;
    }
    .register>h2{
        font-size:16px;
        background: #3366CC;
        color:#FFFFFF;
        padding:10px;
        border-radius:5px 5px 0 0;
    }
    .register>form{
        padding:20px;
    }
    .register>form>div{
        display:flex;
        margin-bottom:10px;
    }
    img{
        width:20px;
        margin-right:5px;
    }
    .register>form>div>input{
        border:none;
        border-bottom: 1px solid black;
        width:100%;
    }
    .register>form>button{
        background: #3366CC;
        border-radius:5px 5px;
        color:#FFFFFF;
        border:none;
        padding:5px 20px;
        margin-left: 70%;
    }
    /* 登録終わり */
</style>

<div class="register">
    <h2>Registration</h2>
    <form action="{{ route('register') }}" method="POST">
    @csrf
        <div>
            <img src="{{asset('storage/user.png')}}" alt="ユーザーのアイコン">
            <input type="text" name="name">
        </div>
        <div>
            <img src="{{asset('storage/mail.png')}}" alt="メールのアイコン">
            <input type="email" name="email">
        </div>
        <div>
            <img src="{{asset('storage/lock.png')}}" alt="パスワードのアイコン">
            <input type="password" name="password">
        </div>
        <div>
            <label>パスワード確認</label>
            <input name="password_confirmation" type="password"/>
        </div>
        <button type="submit">登録</button>
    </form>
</div>
@endsection