<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
    <ul>
        <li><a href="/welcome">Inicio</a></li>
        <li><a href="/about">Acerca de nosotros</a></li>
        <li><a href="/services">Servicios</a></li>
    </ul>

    @yield('content')
    
</body>
</html>