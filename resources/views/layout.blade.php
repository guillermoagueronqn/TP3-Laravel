<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'TP3-Laravel')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/logout">Logout</a></li>
            <li><a href="/category">Category</a></li>
            <li><a href="/category/show/10">Category/show/10</a></li>
            <li><a href="/category/create">Category/create</a></li>
            <li><a href="/category/edit/10">Category/edit/10</a></li>
        </ul>
    </nav>
    @yield('content')
    <footer>
        <ul>
            <li><a href="#">Alumno 1</a></li>
            <li><a href="#">Alumno 2</a></li>
        </ul>
    </footer>
</body>
</html>