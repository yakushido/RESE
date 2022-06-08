<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css\reset.css') }}">
</head>
<body>
    <header>
        <h1><a href="/">RESE</a></h1>
    </header>
    @yield('shops')
    @yield('default')
    @yield('detail')
</body>
</html>