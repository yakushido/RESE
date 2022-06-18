@extends('layouts.default')
@section('shops')
<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
    .search{
        position:absolute;
        right:0;
        top:10px;
        border-radius:5px 5px;
        box-shadow: 1px 1px 5px black;
        height:40px;
    }
    input,
    select{
        height:40px;
        border:none;
        margin-right:10px;
    }
    .shops{
        display:flex;
        flex-wrap:wrap;
    }
    .card{
        width:300px;
        margin:10px;
        border-radius:5px 5px;
        box-shadow: 1px 1px 5px black;
    }
    img{
        width:100%;
    }
    .card_content{
        padding:20px;
    }
    .card_tag{
        display:flex;
        margin-bottom:10px;
    }
    .card_content>a{
        background-color:#3366CC;
        color:#FFFFFF;
        border-radius:5px 5px;
        padding:5px 20px;
    }
</style>
    <div class="search">
        <form action="/search" onchange="submit(this.form)" method="GET" id="form">
            @csrf
                <select name="searchArea" id="submit_area">
                    <option value="" selected>All area</option>
                    @foreach ($areaLists as $areaList)
                        <option value="{{ $areaList['id'] }}">{{ $areaList['name'] }}</option>
                    @endforeach
                </select>
                <select name="searchGenre" id="submit_genre">
                    <option value="" selected>All genre</option>
                    @foreach ($genreLists as $genreList)
                        <option value="{{ $genreList['id'] }}">{{ $genreList['name'] }}</option>
                    @endforeach
                </select>
                <input type="search" name="searchKeyWord" placeholder="Search...">
        </form>
    </div>

    <div class="shops">
        @foreach ($items as $item)
            <div class="card">
                <img src="{{ $item['picture'] }}" alt="店舗画像">
                <div class="card_content">
                    <h2>{{ $item['name'] }}</h2>
                    <div class="card_tag">
                        <p>#{{ $item['area']['name'] }}</p>
                        <p>#{{ $item['genre']['name'] }}</p>
                    </div>
                    <a href="{{ route('shops.detail', ['shop_id' => $item->id ]) }}">詳しく見る</a>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        $(function(){
            $("#submit_area").change(function(){
                $("#form").submit();
            });
            $("#submit_genre").change(function(){
                $("#form").submit();
            });
        });
    </script>

@endsection

