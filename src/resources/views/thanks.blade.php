@extends('layouts.default')
@section('thanks')
<div>
    <h2>会員登録ありがとうございます</h2>
    <button><a href="{{ route('login.show') }}">ログインする</a></button>
</div>
@endsection