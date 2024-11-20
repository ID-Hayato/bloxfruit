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

<body class="bg-blue-300 ">
    <header class="w-full bg-blue-500  h-20 flex justify-center items-center">
        <a href="/">
            <p class="text-5xl text-white">ブロフルコミュニティ　【ぶろこみ】</p>
        </a>

    </header>
    <ul class="w-full h-12 bg-blue-400 flex justify-center items-center gap-2 mb-8">
        <a href=""
            class="border-2 hover:bg-blue-100  bg-white rounded-md min-h-full w-1/4 flex justify-center items-center">
            <li class="text-2xl font-mono">
                トップページ
            </li>
        </a>
        <a href=""
            class="border-2 hover:bg-blue-100  bg-white rounded-md min-h-full w-1/4 flex justify-center items-center">
            <li class="text-2xl font-mono">
                アイテム一覧
            </li>
        </a>
        <a href=""
            class="border-2 hover:bg-blue-100  bg-white rounded-md min-h-full w-1/4 flex justify-center items-center">
            <li class="text-2xl font-mono">
                コンボ共有ページ
            </li>
        </a>
    </ul>
    <div class="mx-auto pt-2  w-3/4 bg-white flex">
        <main class="w-2/3 border-r-2 px-2 mb-2">
            <h1 class="text-center bg-blue-400 text-white ">ページタイトルの挿入</h1>
            {{ $slot }}
        </main>
        <div class="w-1/3">

            <div class="px-2 mb-2 ">
                <p class="text-center bg-blue-400 text-white">カテゴリー</p>
                <div>色々</div>
            </div>
             <div class="px-2 mb-2">
                <p class="text-center bg-blue-400 text-white ">新着コンボ</p>
                <div>まだない</div>
            </div>
            <div class="px-2 mb-2">
                <p class="text-center bg-blue-400 text-white ">更新履歴</p>
                <div>おニュー</div>
            </div>
           

        </div>


    </div>

    {{-- <footer class="w-full bg-blue-500  h-20 flex justify-center items-center">

</footer> --}}

</body>

</html>
