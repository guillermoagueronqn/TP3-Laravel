<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'TP3-Laravel')</title>
</head>
<body>
    <div class="flex flex-col min-h-screen">
        <nav class="p-2 bg-emerald-700">
            <ul class="flex h-10">
                <li class="flex flex-row gap-1 bg-emerald-800 hover:bg-emerald-600 rounded-lg p-2 mr-2"><a href="/">Home</a></li>
                <li class="flex flex-row gap-1 bg-emerald-800 hover:bg-emerald-600 rounded-lg p-2 mr-2"><a href="/login">Login</a></li>
                <li class="flex flex-row gap-1 bg-emerald-800 hover:bg-emerald-600 rounded-lg p-2 mr-2"><a href="/logout">Logout</a></li>
                <li class="flex flex-row gap-1 bg-emerald-800 hover:bg-emerald-600 rounded-lg p-2 mr-2"><a href="/category">Category</a></li>
                <li class="flex flex-row gap-1 bg-emerald-800 hover:bg-emerald-600 rounded-lg p-2 mr-2"><a href="/category/show/10">Category/show/10</a></li>
                <li class="flex flex-row gap-1 bg-emerald-800 hover:bg-emerald-600 rounded-lg p-2 mr-2"><a href="/category/create">Category/create</a></li>
                <li class="flex flex-row gap-1 bg-emerald-800 hover:bg-emerald-600 rounded-lg p-2 mr-2"><a href="/category/edit/10">Category/edit/10</a></li>
            </ul>
        </nav>
        <div class="flex-grow bg-emerald-500">
            <div class="flex flex-col justify-center items-center my-4">
                @yield('content')
            </div>
        </div>
        <footer class="py-6 bg-emerald-700">
            <ul class="mx-auto flex place-content-center font-bold text-slate-200 gap-10">
                <li><a href="#">Alumno 1</a></li>
                <li><a href="#">Alumno 2</a></li>
            </ul>
        </footer>
    </div>
</body>
</html>