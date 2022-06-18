@extends('layouts.default')
@section('detail')
<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
    main{
        display:flex;
        justify-content:space-around;
    }


    /* 詳細 */
    .detail{
        width:45%;
    }
    .detail>div:first-child{
        display:flex;
        margin:20px 0 20px 0;
    }
    .detail>div>a{
        width:30px;
        height:30px;
        border-radius:5px 5px;
        box-shadow: 1px 1px 5px black;
        text-align:center;
        color:black;
        font-weight:bold;
        line-height:30px;
        margin-right:10px;
    }
    img{
        width:100%;
    }
    .detail_tags{
        display:flex;
        margin:20px 0 20px 0;
    }
    /* 詳細終わり */


    /* 予約 */
    .reservation{
        width:45%;
        background-color: #3366CC;
        position:relative;
        border-radius:5px 5px;
    }
    .reservation>h2{
        margin:20px; 
        color:#FFFFFF;
    }
    .reservation>form>input{
        height:25px;
        border:none;
        border-radius:5px 5px;
        padding:0 10px;
        margin:0 0 10px 20px;
        cursor: pointer;
    }
    .reservation>form>select{
        width:80%;
        height:25px;
        border:none;
        border-radius:5px 5px;
        padding:0 10px;
        margin:0 0 10px 20px;
        cursor: pointer;
    }
    .reservation_table{
        width:80%;
        background-color: #6699CC;
        border-radius:5px 5px;
        padding:10px;
        color:#FFFFFF;
        margin:0 0 10px 20px;
    }
    .reservation>form>button{
        border:none;
        width:100%;
        height:30px;
        background-color: #336699;
        color:#FFFFFF;
        position:absolute;
        bottom:0;
        cursor: pointer;
    }
    /* 予約終わり */
</style>
<main>
    <div class="detail">
        <div>
            <a href="/"><</a>
            <h2>{{ $shop['name'] }}</h2>
            <form action="{{ route('favorite.add', [ 'shop_id' => $shop['id'] ]) }}" method="POST">
            @csrf
                <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                <button tupe="submit">お気に入りに追加</button>
            </form>
        </div>
        <img src="{{ $shop->picture }}" alt="店舗画像">
        <div class="detail_tags">
            <p>#{{ $shop['area']['name'] }}</p>
            <p>#{{ $shop['genre']['name'] }}</p>
        </div>
        <div>
            <p>{{ $shop['detail'] }}</p>
        </div>
    </div>

    <div class="reservation">
        <h2>予約</h2>
        <form action="{{ route('reservation.add',['shop_id' => $shop['id'] ]) }}" method="POST">
        @csrf
            <input type="date" name="date">
            <select name="time" id="submit_time">
                <option value="17">17:00</option>
                <option value="18">18:00</option>
                <option value="19">19:00</option>
                <option value="20">20:00</option>
                <option value="21">21:00</option>
                <option value="22">22:00</option>
            </select>
            <select name="number" id="submit_number">
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

            @foreach($items as $item)
            <table class="reservation_table">
                <tr>
                    <td>Shop</td>
                    <td>{{ $item['shop']['name'] }}</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>{{ $item['date']}}</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>{{ $item['time'] }}</td>
                </tr>
                <tr>
                    <td>Number</td>
                    <td>{{ $item['number'] }}人</td>
                </tr>
            </table>
            @endforeach
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