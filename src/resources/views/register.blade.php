@extends('layouts.default')
@section('contents')
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
            <input type="password" name="password" id="password" value=""  onKeyUp="copy()">
        </div>
        <div>
            <input name="password_confirmation" type="hidden" id="confirm" value="">
        </div>
        <button type="submit">登録</button>
    </form>
</div>

<script>
    const password = document.getElementById('password');
    const confirm = document.getElementById('confirm');
    function copy(){
        confirm.value = password.value;
    }
</script>
@endsection