@extends('layouts.default')
@section('login')
<div>
<!-- {{-- エラーメッセージ --}} -->
@if (session('login_error'))
    <div class="">
        {{ session('login_error') }}
    </div>
@endif

    <form action="/login" method="POST">
    @csrf
        <div>
            <span>EMAIL</span><input type="email" name="email">
        </div>
        <div>
            <span>PASSWORD</span><input type="password" name="password">
        </div>
        <button>ログイン</button>
    </form>
</div>
@endsection