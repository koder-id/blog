<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <div class="p-8 md:flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h1 class="text-3xl font-bold leading-8 text-gray-900 sm:text-4xl sm:truncate">
                Belajar bikin blog
            </h1>
        </div>
    </div>
    <div class="p-8">
        @yield('content')
    </div>
</body>

</html>