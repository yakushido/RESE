<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    main{
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
<body>
    <header>
        <div>
            <div></div>
            <div>Rese</div>
        </div>
        <!-- <form action="{{route('shops.serch')}}" method="POST">
            @csrf
                <select name="allArea">
                    <option value="" selected disabled>All area</option>
                    @foreach ($areas as $area)
                        <option value="areas">{{$area->name}}</option>
                    @endforeach
                </select>
                <select name="allGenre">
                    <option value="" selected disabled>All genre</option>
                    @foreach ($genres as $genre)
                        <option value="genres">{{$genre->name}}</option>
                    @endforeach
                </select>
            <input type="text" name="">
        </form> -->
        @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" >Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </header>
    <main>
        @foreach ($items as $item)
            <div class="card">
                <img src="{{$item->picture}}">
                <div class="card_content">
                    <div>{{$item->name}}</div>
                    <div class="card_tag">
                        <p>#{{$item->area->name}}</p>
                        <p>#{{$item->genre->name}}</p>
                    </div>
                    <a href="">詳しく見る</a>
                </div>
            </div>
        @endforeach
    </main>
</body>
</html>