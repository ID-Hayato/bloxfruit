<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">能力データの更新</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('another_fruit_skill.update', $another_fruit) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $another_fruit->id}}">
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">元能力の名前</p>
                <x-input-error :messages="$errors->get('name')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="text" name="name" class="w-2/4" value="{{ $another_fruit->fruit_name }}">
                </div>
            </div>



            <div class=" w-full mb-2">
                <p class="text-center">タップスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_tap_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_tap_id" class="w-1/5">
                            <option value="{{ $another_fruit->another_skill_tap_id }}">
                                {{ $skills->firstWhere('id', $another_fruit->another_skill_tap_id)->common_name ?? '未実装'}}
                            <option>
                                @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
            <div class=" w-full mb-2">
                <p class="text-center">ｚスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_z_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_z_id" class="w-1/5">
                            <option value="{{ $another_fruit->another_skill_z_id }}">
                                {{ $skills->firstWhere('id', $another_fruit->another_skill_z_id)->common_name ?? '未実装'}}
                            <option>
                                @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
          
            <div class=" w-full mb-2">
                <p class="text-center">ｘスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_x_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_x_id" class="w-1/5">
                            <option value="{{ $another_fruit->another_skill_x_id }}">
                                {{ $skills->firstWhere('id', $another_fruit->another_skill_x_id)->common_name ?? '未実装'}}</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>

          
            <div class=" w-full mb-2">
                <p class="text-center">ｃスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_c_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_c_id" class="w-1/5">
                            <option value="{{ $another_fruit->another_skill_c_id }}">
                                {{ $skills->firstWhere('id', $another_fruit->another_skill_c_id)->common_name ?? '未実装'}}</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
           
            <div class=" w-full mb-2">
                <p class="text-center">ｖスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_v_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_v_id" class="w-1/5">
                            <option value="{{ $another_fruit->another_skill_v_id }}">
                                {{ $skills->firstWhere('id', $another_fruit->another_skill_v_id)->common_name ?? '未実装'}}
                            <option>
                                @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
           
            <div class=" w-full mb-2">
                <p class="text-center">ｆスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_f_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_f_id" class="w-1/5">
                            <option value="{{ $another_fruit->another_skill_f_id }}">
                                {{ $skills->firstWhere('id', $another_fruit->another_skill_f_id)->common_name ?? '未実装'}}
                            <option>
                                @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
           
            <div class="border-b-2 w-full my-3 text-center">
                <button type="submit"
                    class="text-xl border border-black px-6 py-2 rounded-xl hover:bg-gray-100">登録</button>
            </div>

        </form>
    </div>
</x-admin-layout>
