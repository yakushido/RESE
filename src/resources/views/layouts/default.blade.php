<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css\reset.css') }}">
    <style>
        .header{
            display:inline-block;
        }
        .header_title{
            display:flex;
            align-items: center;
            
            height:40px;
        }
        a{
            text-decoration:none;
            color:#3366CC;
            margin-left:10px;
        }

        .menu__humbergar {
            display: inline-block;
            height: 40px;
            width: 40px;
            position: relative;
            cursor: pointer;
            background-color: #3366CC;
            border-radius:5px;
        }
        .menu__humbergar > span {
            display: block;
            height: 5%;
            background-color: #FFFFFF;
            position: absolute;
            transition: 0.2s;
        }
        .menu__humbergar__bar--top {
            width: 30%;
            left:25%;
            /* transform: translate(-100%, 0); */
            top:10px;
        }
        .menu__humbergar__bar--middle {
            top: 50%;
            left:25%;
            width: 50%;
            transform: translate(0, -50%);
        }
        .menu__humbergar__bar--bottom {
            width: 15%;
            bottom: 10px;
            left:25%;
            /* transform: translate(-100%, 0); */
        }
        .menu__humbergar.active span:nth-child(1) {
            transform: rotate(45deg);
            width: 50%;
            top: 50%;
        }
        .menu__humbergar.active span:nth-child(2) {
            opacity: 0;
        }
        .menu__humbergar.active span:nth-child(3) {
            transform: rotate(-45deg);
            width: 50%;
            top: 50%;
        }

        .mask {
            position: fixed;
            width: 100vw;
            height: 100vh;
            left: -100%;
            background-color: #fff;
            transition: 0.5s;
            z-index: -1;
        }
        .mask.active {
            left: 0;
            z-index: 1;
        }
        .mask-menu__lists {
            text-align: center;
            padding: 70px;
        }
        .mask-menu__lists > li {
            padding: 25px;
            list-style: none;
        }
        .mask-menu__lists > li > a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header_title">
                <div class="menu__humbergar" id="menu__humbergar">
                    <span class="menu__humbergar__bar--top"></span>
                    <span class="menu__humbergar__bar--middle"></span>
                    <span class="menu__humbergar__bar--bottom"></span>
                </div>
            <h1><a href="/">RESE</a></h1>
        </div>
    </header>
    <div class="mask" id="mask">
        <ul class="mask-menu__lists">
            <li><a href="/">Home</a></li>
            @if( !Auth::check() )
            <li><a href="/register">Registration</a></li>
            <li><a href="/login">Login</a></li>
            @elseif( Auth::check() )
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button>Logout</button>
                </form>
            </li>
            <li><a href="{{ route('home') }}">Mypage</a></li>
            @endif
        </ul>
    </div>
    <div>
        @yield('shops')
        @yield('detail')
        @yield('register')
        @yield('thanks')
        @yield('login')
        @yield('mypage')
        @yield('done')
    </div>
    <script>
        const menu = document.getElementById("menu__humbergar");
        const mask = document.getElementById("mask");
        menu.addEventListener('click',() => {
            menu.classList.toggle('active');
            mask.classList.toggle('active');
        });
    </script>
</body>
</html>