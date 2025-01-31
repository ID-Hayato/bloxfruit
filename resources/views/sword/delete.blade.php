<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">剣の削除</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('sword.destroy', $sword) }}" method="post">
            @csrf
            <h1 class="text-center text-red-500 text-3xl">⚠以下のデータを削除しようとしています⚠</h1>
            <div class="w-full">
                <ul class=" flex border ">
                    <li>
                        <div>ID</div>
                        <div>{{ $sword->id }}</div>
                    </li>
                    <li>
                        <div>名前</div>
                        <div>{{ $sword->name }}</div>
                    </li>
                    <li>
                        <div>スキルｚ</div>
                        <div>{{ $sword->skill_z_id }}　 {{ $skills->firstWhere('id', $sword->skill_z_id)->common_name }}
                        </div>
                    </li>
                    <li>
                        <div>スキルのｚマスタリー</div>
                        <div>{{ $sword->skill_z_mastery }}</div>
                    </li>
                    <li>
                        <div>スキルｘ</div>
                        <div>{{ $sword->skill_x_id }}　{{ $skills->firstWhere('id', $sword->skill_z_id)->common_name }}
                            </< /div>
                    </li>
                    <li>
                        <div>スキルｘのマスタリー</div>
                        <div>{{ $sword->skill_x_mastery }}</div>
                    </li>
                    <li>
                        <div>レアリティ</div>
                        <div>{{ $sword->rarity }}　
                             @if ($sword->rarity === 'Common')
                                コモン
                            @elseif($sword->rarity === 'Uncommon')
                                アンコモン
                            @elseif($sword->rarity === 'Rare')
                                レア
                            @elseif($sword->rarity === 'Legendary')
                                レジェンダリー
                            @elseif($sword->rarity === 'Mythical')
                                ミシック
                            @else
                                未設定
                            @endif
                        </div>
                    </li>
                    <li>
                        <div>入手方法</div>
                        <div>{{ $sword->howtogetit }}</div>
                    </li>
                </ul>
            </div>

            <h2 class="pt-2 text-center text-xl">よろしいですか？</h2>
            <input type="hidden" name="id" value="{{ $sword->id }}">
            <button type="submit">
                削除
            </button>


        </form>
    </div>


</x-admin-layout>
