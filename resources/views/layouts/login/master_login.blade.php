<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'My Website')</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    
    <style>
        .body-login {
            background-color: #CECECE;
        }

       .header-area {
            background-color:#3A3B3C;
        }

        .user-name,
        table tr td [class^="ti-"] {
            cursor: pointer;
        }

        .user-name {
            font-size: 17px;
            font-weight: 500;
            color: #fff;
            letter-spacing: 0;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .user-profile {
            margin-right: -30px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            background-color:#696969;
            padding: 20px 38px;
            position: relative;
            border-bottom-left-radius: 30px;
        }
    </style>
</head>

<body class="body-login">
     {{-- main content --}}
     <div class="main-content" style="min-height: 350px;">
        {{-- header --}}
        @include('layouts.login.header')
        {{-- content --}}
        
            @yield('content')
    </div>
    
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
