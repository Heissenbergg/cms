<!doctype html>
<html lang="cro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        body{font-family: 'Lato';}
    </style>
</head>
<body class="first_body">
    @yield('first_body')
<div id="container">
    @yield('container')
    <h1 class="header">
        @yield('header')
    </h1>
</div>
<div class="footer">
    @yield('footer')
</div>
</body>
</html>