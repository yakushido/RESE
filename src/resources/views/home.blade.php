@extends('layouts.default')
@section('mypage')
<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
    h1{
        text-align:center;
    }
    .cards{
        display:flex;
        margin:20px;
    }
    h2{
        margin-bottom:10px;
    }

    /* 予約 */
    .reservation{
        width:40%;
    }
    .reservation_card{
        width:300px;
        background-color:#3366CC;
        color:white;
        border-radius:5px 5px;
        box-shadow: 1px 1px 5px black;
        padding:10px;
        margin-bottom:10px;
    }
    .reservation_card>div{
        display:flex;
        justify-content: space-between;
    }
    .reservation_card>table>tr>td{
        margin-right:20px;
    }

        /* 削除ボタン */
        .delete {
        box-sizing: border-box;
        position: relative;
        display: block;
        width: 22px;
        height: 22px;
        border: 2px solid #FFFFFF;
        border-radius: 40px;
        background-color:#3366CC;
        cursor: pointer;

        }
        .delete::after,
        .delete::before {
            content: "";
            display: block;
            box-sizing: border-box;
            position: absolute;
            width: 12px;
            height: 2px;
            background: currentColor;
            transform: rotate(45deg);
            border-radius: 5px;
            top: 8px;
            left: 3px;
            color:#FFFFFF;
        }
        .delete::after {
            transform: rotate(-45deg)
        }
        /* 削除ボタン終わり */

    /* 予約終わり */

    /* お気に入り */
    .favorite{
        width:60%;
    
    }
    .favorite>div{
        display:flex;
    }
    .favorite_card{
        width:250px;
        margin-right:50px;
        border-radius:5px 5px;
        box-shadow: 1px 1px 5px black;
    }
    .favorite_card>div{
        padding:10px;
    }
    .favorite_card>div>a{
        background-color:#3366CC;
        color:#FFFFFF;
        border-radius:5px 5px;
        padding:5px 20px;
    }
    img{
        width:100%;
        border-radius:5px 5px 0 0;
    }
    .favorite_card_tag{
        display:flex;
    }
    .favorite_card_tag>p{
        margin:10px 10px 20px 0;
    }
    /* お気に入り終わり */

</style>
    <h1>{{ Auth::user()->name }}さん</h1>
    <div class="cards">
        <div class="reservation">
            <h2>予約状況</h2>
                @foreach($items as $item)
                    <div class="reservation_card">
                        <div>
                            <h3>予約{{ $item['id'] }}</h3>
                            <form action="{{ route('reservation.delete', $item->id) }}" method="POST">
                            @csrf
                                <button class="delete"></button>
                            </form>
                        </div>
                        <table>
                            <tr>
                                <td>Shop</td>
                                <td>{{ $item['shop']['name'] }}</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td>{{ $item['date'] }}</td>
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
                    </div>
                @endforeach
        </div>
        <div class="favorite">
            <h2>お気に入り店舗</h2>
            <div>
                @foreach ($favorites as $favorite)
                    <div class="favorite_card">
                        <img src="{{ $favorite['shop']['picture'] }}" alt="店舗画像">
                        <div>
                            <h2>{{ $favorite['shop']['name'] }}</h2>
                            <div class="favorite_card_tag">
                                <p>#{{ $favorite['shop']['area']['name'] }}</p>
                                <p>#{{ $favorite['shop']['genre']['name'] }}</p>
                            </div>
                            <a href="{{ route('shops.detail', ['shop_id' => $item->id ]) }}">詳しく見る</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection