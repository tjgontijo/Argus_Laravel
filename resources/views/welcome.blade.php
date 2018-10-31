<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Acompanhamento do PAE</title>
    <!-- Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Styles -->
    <style>
        html,
        body {
            background: url("/img/site/background.jpg") no-repeat center center fixed; ;
            overflow-y: hidden;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            color: #636b6f;
            /*font-family: 'Raleway', sans-serif;*/
            font-family: 'Roboto', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            color: #636b6f;
            padding-bottom: 100px;
            font-size: 3.5vw;
            font-weight: bold;
        }
        .links>a {
            color: #636b6f;
            padding-top: 0 10Px;
            font-size: 1.5vh;
            font-weight: 500;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .button1 {
            background-color: transparent;
            color: white;
            border-bottom: 1px solid #fff;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a> 
        @else
            <a href="{{ route('login') }}">Entrar</a>
            <!--<a href="{{ route('register') }}">Register</a>-->
        @endauth
        </div>
        @endif
        <div class="content">
            <div class="title m-b-md">
            ARGUS
            </div>
            <div class="links">
                <!--<a href="{{ route('login') }}" class="button1">Entrar</a>-->
            </div>
        </div>
    </div>
</body>
</html>