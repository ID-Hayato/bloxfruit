<x-admin-layout>

    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">スキルの削除</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('fightingstyle.destroy', $fightingstyle ) }}" method="post">
            @csrf
            <h1 class="text-center text-red-500 text-3xl">⚠以下のデータを削除しようとしています⚠</h1>
            <div class="w-full">
                <ul class=" flex border ">
                    <li>
                        <div>ID</div>
                        <div>{{ $fightingstyle->id }}</div>
                    </li>
                    <li>
                        <div>名前</div>
                        <div>{{ $fightingstyle->name }}</div>
                    </li>
                    <li>
                        <div>スキルｚ</div>
                        <div>{{ $fightingstyle->skill_z_id }}　  {{ $skills->firstWhere('id', $fightingstyle->skill_z_id)->common_name }}</div>
                    </li>
                    <li >
                        <div>スキルのｚマスタリー</div>
                        <div>{{ $fightingstyle->skill_z_mastery }}</div>
                    </li>
                    <li>
                        <div>スキルｘ</div>
                        <div>{{ $fightingstyle->skill_x_id }}　{{ $skills->firstWhere('id', $fightingstyle->skill_z_id)->common_name }}</</div>
                    </li>
                    <li >
                        <div>スキルｘのマスタリー</div>
                        <div>{{ $fightingstyle->skill_x_mastery }}</div>
                    </li>
                    <li>
                        <div>スキルｃ</div>
                        <div>{{ $fightingstyle->skill_c_id }}　{{ $skills->firstWhere('id', $fightingstyle->skill_z_id)->common_name }}</</div>
                    </li>
                    <li >
                        <div>スキルｃのマスタリー</div>
                        <div>{{ $fightingstyle->skill_c_mastery }}</div>
                    </li>
                    <li >
                        <div>入手方法</div>
                        <div>{{ $fightingstyle->howtogetit }}</div>
                    </li>
                </ul>
            </div>

  <h2 class="pt-2 text-center text-xl">よろしいですか？</h2>
  <input type="hidden" name="id" value="{{$fightingstyle->id}}">
    <button type="submit">
        削除
    </button>


        </form>
    </div>

  
</x-admin-layout>
