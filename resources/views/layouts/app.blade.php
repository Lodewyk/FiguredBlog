<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Figured Blog</title>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Courier New', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            /*display: flex;*/
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
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 50px;
        }

        .post-list {

        }

        .post, .edit-post {
            margin: 20px auto;
            padding: 20px 20px;
            width: 600px;
            -webkit-box-shadow: 13px 14px 16px -4px rgba(163,155,163,1);
            -moz-box-shadow: 13px 14px 16px -4px rgba(163,155,163,1);
            box-shadow: 13px 14px 16px -4px rgba(163,155,163,1);
        }

        .post .post-title {
            font-size: 20px;
            font-weight: bold; margin-bottom: 10px
        }

        .post .post-content {
            text-align: left;
            padding-bottom: 30px;
        }

        .edit-post .post-title {
            text-align: left;
        }

        .edit-post .post-content {
            text-align: left;
            margin-top: 15px;
        }

        .editable {
            width: 100%;
        }

        .post-options {
            text-align: right;
            margin-bottom: 10px;
        }

        .post-delete {
            float: right;
            /*margin: 0px 10px 10px 0px;*/
        }

        .post-edit {
            float: left;
            /*margin: 0px 10px 10px 0px;*/
        }
    </style>

</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
