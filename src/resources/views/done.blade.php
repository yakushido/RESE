@extends('layouts.default')
@section('done')
<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    .done{
        width:500px;
        height:300px;
        border-radius:5px 5px;
        box-shadow: 1px 1px 5px black;
        position:relative;
        margin:50px auto;
    }
    .done>div{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        text-align:center;
        width:100%;
    }
    .done>div>button{
        border:none;
        height:30px;
        background-color: #6699CC;
        color:#FFFFFF;
        border-radius:5px 5px;
        padding:5px 15px;
        margin-top:40px;
        cursor:pointer;
    }
</style>
<div class="done">
    <div>
        <h2>ご予約ありがとうございます</h2>
        <button type="button" onClick="history.back()">戻る</button>
    </div>
</div>
@endsection