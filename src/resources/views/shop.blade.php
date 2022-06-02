<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <div></div>
            <div>Rese</div>
        </div>
        <form action="">
            <select name="allArea">
                <option value=""></option>
            </select>
            <select name="allArea">
                <option value=""></option>
            </select>
            <input type="text" name="">
        </form>
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
            <div>
                {{$item->name}}
            </div>
        </div>
    @endforeach
    </main>
</body>
</html>