@extends('layouts.default')
@section('mypage')
    <h1>{{ Auth::user()->name }}さん</h1>
@endsection