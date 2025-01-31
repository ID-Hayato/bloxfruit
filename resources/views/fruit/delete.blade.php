<x-admin-layout>

    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">スキルの削除</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('fruit.destroy', $fruit) }}" method="post">
            @csrf
            <h1 class="text-center text-red-500 text-3xl">⚠以下のデータを削除しようとしています⚠</h1>
            <div class="w-full">
                <ul class=" flex border ">
                    <li>
                        <div>ID</div>
                        <div>{{ $fruit->id }}</div>
                    </li>
                    <li>
                        <div>名前</div>
                        <div>{{ $fruit->name }}</div>
                    </li>
                    <li>
                        <div>スキルタップ</div>
                        <div>{{ $fruit->skill_tap_id }}
                            {{ $skills->firstWhere('id', $fruit->skill_tap_id)->common_name ?? '未実装' }}</div>
                    </li>
                    <li>
                        <div>スキルｚ</div>
                        <div>{{ $fruit->skill_z_id }}　 {{ $skills->firstWhere('id', $fruit->skill_z_id)->common_name }}
                        </div>
                    </li>
                    <li>
                        <div>スキルのｚマスタリー</div>
                        <div>{{ $fruit->skill_z_mastery }}</div>
                    </li>
                    <li>
                        <div>スキルｘ</div>
                        <div>{{ $fruit->skill_x_id }}　{{ $skills->firstWhere('id', $fruit->skill_x_id)->common_name }}
                            </< /div>
                    </li>
                    <li>
                        <div>スキルｘのマスタリー</div>
                        <div>{{ $fruit->skill_x_mastery }}</div>
                    </li>
                    <li>
                        <div>スキルｃ</div>
                        <div>{{ $fruit->skill_c_id }}　{{ $skills->firstWhere('id', $fruit->skill_c_id)->common_name }}
                            </< /div>
                    </li>
                    <li>
                        <div>スキルｃのマスタリー</div>
                        <div>{{ $fruit->skill_c_mastery }}</div>
                    </li>
                    <li>
                        <div>スキルｖ</div>
                        <div>
                            {{ $fruit->skill_v_id }}　{{ $skills->firstWhere('id', $fruit->skill_v_id)->common_name ?? '未実装' }}
                            </< /div>
                    </li>
                    <li>
                        <div>スキルｖのマスタリー</div>
                        <div>{{ $fruit->skill_v_mastery ?? '未実装' }}</div>
                    </li>
                    <li>
                        <div>スキルｆ</div>
                        <div>
                            {{ $fruit->skill_f_id }}　{{ $skills->firstWhere('id', $fruit->skill_f_id)->common_name ?? '未実装' }}
                            </< /div>
                    </li>
                    <li>
                        <div>スキルｆのマスタリー</div>
                        <div>{{ $fruit->skill_f_mastery ?? '未実装' }}</div>
                    </li>
                    <li>
                        <div>レアリティ</div>
                        <div>{{ $fruit->rarity }}</div>
                    </li>
                    <li>
                        <div>値段</div>
                        <div>{{ $fruit->price }}</div>
                    </li>
                </ul>
            </div>

            <h2 class="pt-2 text-center text-xl">よろしいですか？</h2>
            <input type="hidden" name="id" value="{{ $fruit->id }}">
            <button type="submit">
                削除
            </button>


        </form>
    </div>


</x-admin-layout>
