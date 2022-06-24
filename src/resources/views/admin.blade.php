<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>管理者画面</h1>
    <div>
        <form action="{{ route('manager.add') }}" method="POST">
        @csrf
            <h2>店舗名</h2>
            <select name="shop_name">
                @foreach($shops as $shop)
                <option value="{{ $shop['id'] }}">{{ $shop['name']  }}</option>
                @endforeach
            </select>
            <input type="text" name="manager_name">
            <button>追加</button>
        </form>
    </div>
    <div>
        <h2>店舗管理者一覧</h2>
        <div>
            <table>
                <tr>
                    <th>店舗名</th>
                    <th>店舗管理者名</th>
                </tr>
                @foreach($managers as $manager)
                <tr>
                    <td>{{ $manager['shop']['name'] }}</td>
                    <td>{{ $manager['name'] }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>