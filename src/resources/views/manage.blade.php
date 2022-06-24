<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>management</title>
</head>
<body>
    <main>
        <h1>店舗代表者画面</h1>
        <div class="detail">
            <h2>{{ $shop['name'] }}</h2>
            <img src="{{ $shop->picture }}" alt="店舗画像">
            <div class="detail_tags">
            <p>#{{ $shop['area']['name'] }}</p>
            <p>#{{ $shop['genre']['name'] }}</p>
        </div>
        <div>
            <p>{{ $shop['detail'] }}</p>
        </div>
    </div>
    </main>
</body>
</html>