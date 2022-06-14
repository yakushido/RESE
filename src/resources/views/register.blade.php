@extends('layouts.default')
@section('register')
<div>
    <form action="/register" method="POST">
    @csrf
        <div>
            <span>NAME</span><input type="text" name="name">
        </div>
        <div>
            <span>EMAIL</span><input type="email" name="email">
        </div>
        <div>
            <span>PASSWORD</span><input type="text" name="password">
        </div>
        <button>登録</button>
    </form>
</div>
@endsection