@extends('layouts.default')
@section('contents')
<link rel="stylesheet" href="{{ asset('css\thanks.css') }}">
<div class="thanks">
    <div>
        <h2>会員登録ありがとうございます</h2>
        <button><a href="/login">ログインする</a></button>
    </div>
</div>
@endsection