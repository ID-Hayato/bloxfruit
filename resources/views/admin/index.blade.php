<x-admin-layout>
    <ul class="w-full h-12 flex justify-center items-center gap-2 mb-8">
        <a href="http://127.0.0.1:8000/"
            class="border-2 hover:bg-gray-100  bg-white rounded-md min-h-full w-1/4 flex justify-center items-center">
            <li class="text-2xl font-mono">
                ホームページ
            </li>
        </a>
        <a href=""
            class="border-2 hover:bg-gray-100  bg-white rounded-md min-h-full w-1/4 flex justify-center items-center">
            <li class="text-2xl font-mono">
                アイテム一覧
            </li>
        </a>
        <a href=""
            class="border-2 hover:bg-gray-100  bg-white rounded-md min-h-full w-1/4 flex justify-center items-center">
            <li class="text-2xl font-mono">
                コンボ共有ページ
            </li>
        </a>
    </ul>

    @if (session('message'))
    <div class="my-2 text-center text-red-600">
        {{ session('message') }}
    </div>
    @endif

    <h1 class="text-center text-4xl mb-6">「」さんおかえりなさい。</h1>
    <div>
        <h1 class="text-center text-2xl"> 新しいデータを作成する </h1>
        <ul class="w-full  flex justify-center items-center gap-6 mb-8">
            <a href="/skill/create"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    スキルの作成
                </li>
            </a>
            <a href="/fightingstyle/create"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    格闘の作成
                </li>
            </a>
            <a href="/fruit/create"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    能力の作成
                </li>
            </a>
            <a href="/sword/create"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    剣の作成
                </li>
            </a>
            <a href="/gun/create"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    銃の作成
                </li>
            </a>

        </ul>
    </div>

    <div>
        <h1 class="text-center text-2xl"> 既存のデータを変更する </h1>
        <ul class="w-full  flex justify-center items-center gap-6 mb-8">
            <a href="/skill/argument"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    スキルの変更
                </li>
            </a>
            <a href="/fightingstyle/argument"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    格闘の変更
                </li>
            </a>
            <a href="/fruit/argument"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    能力の変更
                </li>
            </a>
            <a href="/sword/argument"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    剣の変更
                </li>
            </a>
            <a href="/gun/argument"
                class="w-48 h-32 borber-4 bg-gray-200 rounded-3xl flex justify-center items-center text-2xl">
                <li>
                    銃の変更
                </li>
            </a>

        </ul>
    </div>


</x-admin-layout>
