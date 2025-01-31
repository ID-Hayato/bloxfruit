<x-admin-layout>

    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">スキルの削除</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('another_fruit_skill.destroy', $another_fruit ) }}" method="post">
            @csrf
            <input type="hidden" name="skill_id" value="{{$skill_id}}">
            <h1 class="text-center text-red-500 text-3xl">⚠以下のデータを削除しようとしています⚠</h1>
            <div class="w-full">
                <ul class=" flex border ">
                    <li>
                        <div>ID</div>
                        <div>{{ $another_fruit->id }}</div>
                    </li>
                    <li>
                        <div>元能力の名前</div>
                        <div>{{ $another_fruit->fruit_name }}</div>
                    </li>
                    <li>
                        <div>スキルタップ</div>
                        <div>{{ $another_fruit->another_skill_tap_id }}　  {{ $skills->firstWhere('id', $another_fruit->another_skill_tap_id)->common_name  ?? '未実装'}}</div>
                    </li>
                    <li>
                        <div>スキルｚ</div>
                        <div>{{ $another_fruit->another_skill_z_id }}　  {{ $skills->firstWhere('id', $another_fruit->another_skill_z_id)->common_name ?? '未実装'}}</div>
                    </li>
                  
                    <li>
                        <div>スキルｘ</div>
                        <div>{{ $another_fruit->another_skill_x_id }}　{{ $skills->firstWhere('id', $another_fruit->another_skill_x_id)->common_name ?? '未実装'}}</</div>
                    </li>
                 
                    <li>
                        <div>スキルｃ</div>
                        <div>{{ $another_fruit->another_skill_c_id }}　{{ $skills->firstWhere('id', $another_fruit->another_skill_c_id)->common_name ?? '未実装'}}</</div>
                    </li>
                 
                    <li>
                        <div>スキルｖ</div>
                        <div>{{ $another_fruit->another_skill_v_id }}　{{ $skills->firstWhere('id', $another_fruit->another_skill_v_id)->common_name ?? '未実装'}}</</div>
                    </li>
                    <li>
                        <div>スキルｆ</div>
                        <div>{{ $another_fruit->another_skill_f_id }}　{{ $skills->firstWhere('id', $another_fruit->another_skill_f_id)->common_name ?? '未実装'}}</</div>
                    </li>
                </ul>
            </div>

  <h2 class="pt-2 text-center text-xl">よろしいですか？</h2>
  <input type="hidden" name="id" value="{{$another_fruit->id}}">
    <button type="submit">
        削除
    </button>


        </form>
    </div>

  
</x-admin-layout>
