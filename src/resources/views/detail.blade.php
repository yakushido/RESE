@extends('layouts.default')
@section('detail')
<style>
    main{
        display:flex;
        justify-content:space-around;
    }
    .detail_card{
        width:45%;
    }
    img{
        width:100%;
    }
    .reservation_card{
        width:45%;
        background-color: aqua;
    }
    .reservation_card>div{
        display:flex;
        flex-direction:column;
    }
</style>
<main>
    <div class="detail_card">
        <h2>{{ $shop['name'] }}</h2>
        <img src="{{ $shop->picture }}" alt="店舗画像">
        <div>
            <p>#{{ $shop['area']['name'] }}</p>
            <p>#{{ $shop['genre']['name'] }}</p>
        </div>
        <div>
            <p>{{ $shop['detail'] }}</p>
        </div>
    </div>
    <div class="reservation_card">
        <h2>予約</h2>
        <form action="{{route('reservation.add')}}" method="POST">
        @csrf
            <input type="date" id="submit_date">
            <input type="time" id="submit_time">
            <select id="number" id="submit_number">
                <option value="1">1人</option>
                <option value="2">2人</option>
                <option value="3">3人</option>
                <option value="4">4人</option>
                <option value="5">5人</option>
                <option value="6">6人</option>
                <option value="7">7人</option>
                <option value="8">8人</option>
                <option value="9">9人</option>
                <option value="10">10人</option>
            </select>
            <table>
                <tr>
                    <td>Shop</td>
                    <td>{{ $shop['name'] }}</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>{{ $date }}</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>{{ $time }}</td>
                </tr>
                <tr>
                    <td>Number</td>
                    <td>{{ $number }}</td>
                </tr>
            </table>
            <button>予約する</button>
        </form>
    </div>
</main>
<script>
        $(function(){
            $("#submit_date").change(function(){
                $("#form").submit();
            });
            $("#submit_time").change(function(){
                $("#form").submit();
            });
            $("#submit_number").change(function(){
                $("#form").submit();
            });
        });
    </script>
@endsection