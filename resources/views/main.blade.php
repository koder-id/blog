<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="p-8 flex md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h1 class="text-3xl font-bold leading-8 text-gray-900 sm:text-4xl sm:truncate">
                <a href="/">Belajar bikin blog</a>
            </h1>
        </div>
        <div class="mt-0">
            <a href="{{ route('posts.create') }}"
                class="ml-3 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Publish
            </a>
        </div>
    </div>
    <div class="p-8">
        @yield('content')
    </div>
</body>

</html>