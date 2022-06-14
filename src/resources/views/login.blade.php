@extends('layouts.default')
@section('login')
<div>
    <form action="/login" method="post">
    @csrf
        <div>
            <span>EMAIL</span><input type="email" name="email">
        </div>
        <div>
            <span>PASSWORD</span><input type="password" name="password">
        </div>
        <button type="submit">ログイン</button>
    </form>
</div>
@endsection