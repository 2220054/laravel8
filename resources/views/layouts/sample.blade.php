<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ mix('css/app.css' )}}" rel="stylesheet">

    <title>@yield('pageTitle') - サーバーサイドスクリプト演習２</title>
</head>
<body>
    <div class="container">

        @yield('content')

    </div><!--/.container-->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
