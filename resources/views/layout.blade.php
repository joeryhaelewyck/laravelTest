<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'default title')</title>
</head>
<body>
    @yield('content')
    <ul>
        <li><a href="/about">About us</a> </li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/home">Home Page</a></li>
    </ul>
</body>
</html>
