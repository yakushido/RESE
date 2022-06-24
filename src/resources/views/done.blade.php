@extends('layouts.default')
@section('contents')
<link rel="stylesheet" href="{{ asset('css\done.css') }}">
<div class="done">
    <div>
        <h2>ご予約ありがとうございます</h2>
        <button type="button"><a href="{{ route('home') }}">戻る</a></button>
    </div>
</div>
@endsection