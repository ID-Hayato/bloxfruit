<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">剣の削除</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('gun.destroy', $gun) }}" method="post">
            @csrf
            <h1 class="text-center text-red-500 text-3xl">⚠以下のデータを削除しようとしています⚠</h1>
            <div class="w-full">
                <ul class=" flex border ">
                    <li>
                        <div>ID</div>
                        <div>{{ $gun->id }}</div>
                    </li>
                    <li>
                        <div>名前</div>
                        <div>{{ $gun->name }}</div>
                    </li>
                    <li>
                        <div>スキルｚ</div>
                        <div>{{ $gun->skill_z_id }}　 {{ $skills->firstWhere('id', $gun->skill_z_id)->common_name }}
                        </div>
                    </li>
                    <li>
                        <div>スキルのｚマスタリー</div>
                        <div>{{ $gun->skill_z_mastery }}</div>
                    </li>
                    <li>
                        <div>スキルｘ</div>
                        <div>{{ $gun->skill_x_id }}　{{ $skills->firstWhere('id', $gun->skill_z_id)->common_name }}
                            </< /div>
                    </li>
                    <li>
                        <div>スキルｘのマスタリー</div>
                        <div>{{ $gun->skill_x_mastery }}</div>
                    </li>
                    <li>
                        <div>レアリティ</div>
                        <div>{{ $gun->rarity }}　
                             @if ($gun->rarity === 'Common')
                                コモン
                            @elseif($gun->rarity === 'Uncommon')
                                アンコモン
                            @elseif($gun->rarity === 'Rare')
                                レア
                            @elseif($gun->rarity === 'Legendary')
                                レジェンダリー
                            @elseif($gun->rarity === 'Mythical')
                                ミシック
                            @else
                                未設定
                            @endif
                        </div>
                    </li>
                    <li>
                        <div>入手方法</div>
                        <div>{{ $gun->howtogetit }}</div>
                    </li>
                </ul>
            </div>

            <h2 class="pt-2 text-center text-xl">よろしいですか？</h2>
            <input type="hidden" name="id" value="{{ $gun->id }}">
            <button type="submit">
                削除
            </button>


        </form>
    </div>


</x-admin-layout>
