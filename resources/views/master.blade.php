<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('frontEndAssets')}}/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="{{asset('img/my-bg.png')}}" alt="" style="height: 40px; width: 40px;">
        </a>
        <ul class="navbar-nav ms-auto">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('add')}}" class="nav-link">add</a></li>
            <li><a href="{{route('manage')}}" class="nav-link">manage</a></li>
        </ul>
    </div>
</nav>
@yield('body')
</body>
</html>

