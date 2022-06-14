@extends('layouts.default')
@section('register')
<div>
    <form action="{{ route('register') }}" method="POST">
    @csrf
        <div>
            <label>ユーザ名</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>メールアドレス</label>
            <input type="email" name="email">
        </div>
        <div>
            <label>パスワード</label>
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