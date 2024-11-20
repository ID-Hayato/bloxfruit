<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-200 ">
    <header class="w-full bg-blue-500  h-20 flex justify-center items-center">
        <a href="/">
            <p class="text-5xl text-white">ブロフルコミュニティ　管理者用ページ</p>
        </a>

    </header>
   
    <div class="mx-auto pt-2  w-3/4 bg-white flex">
      
            {{ $slot }}
      
    </div>

    {{-- <footer class="w-full bg-blue-500  h-20 flex justify-center items-center">

</footer> --}}

</body>

</html>
