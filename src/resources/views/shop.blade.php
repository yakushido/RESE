@extends('layouts.default')
@section('shops')
<style>
    .shops{
        display:flex;
        flex-wrap:wrap;
    }
    .card{
        width:300px;
        border:1px solid black;
        margin:10px;
    }
    img{
        width:100%;
    }
    .card_content{
        padding:10px;
    }
    .card_tag{
        display:flex;
    }
    .card_content>a{
        background-color: blue;
        color:black;
    }
</style>

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
                    <a href="{{ route('shops.detail', ['id' => $item->id ]) }}">詳しく見る</a>
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

