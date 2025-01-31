<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">スキルデータの更新</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('fightingstyle.update', $fightingstyle) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $fightingstyle->id}}">
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">拳の名前</p>
                <x-input-error :messages="$errors->get('name')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="text" name="name" class="w-2/4" value="{{ $fightingstyle->name }}">
                </div>
            </div>



            <div class=" w-full mb-2">
                <p class="text-center">ｚスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_z_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_z_id" class="w-1/5">
                            <option value="{{ $fightingstyle->skill_z_id }}">
                                {{ $skills->firstWhere('id', $fightingstyle->skill_z_id)->common_name }}
                            <option>
                                @foreach ($skills as $skill)
                            <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">必要マスを入力</p>
                <x-input-error :messages="$errors->get('skill_z_mastery')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="number" name="skill_z_mastery" class="w-1/8"
                        value="{{ $fightingstyle->skill_z_mastery }}">
                </div>
            </div>
            <div class=" w-full mb-2">
                <p class="text-center">ｘスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_x_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_x_id" class="w-1/5">
                            <option value="{{ $fightingstyle->skill_x_id }}">
                                {{ $skills->firstWhere('id', $fightingstyle->skill_x_id)->common_name }}</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">必要マスを入力</p>
                <x-input-error :messages="$errors->get('skill_x_mastery')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="number" name="skill_x_mastery" class="w-1/8"
                        value="{{ $fightingstyle->skill_x_mastery }}">
                </div>
            </div>
            <div class=" w-full mb-2">
                <p class="text-center">ｃスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_c_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_c_id" class="w-1/5">
                            <option value="{{ $fightingstyle->skill_c_id }}">
                                {{ $skills->firstWhere('id', $fightingstyle->skill_c_id)->common_name }}</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">必要マスを入力</p>
                <x-input-error :messages="$errors->get('skill_c_mastery')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="number" name="skill_c_mastery" class="w-1/8"
                        value="{{ $fightingstyle->skill_x_mastery }}">
                </div>
            </div>
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">入手方法を記載</p>
                <x-input-error :messages="$errors->get('howtogetit')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <textarea name="howtogetit" class="w-3/4" id="" cols="30" rows="10" value="">{{ $fightingstyle->howtogetit }}</textarea>
                </div>
            </div>
            <div class="border-b-2 w-full my-3 text-center">
                <button type="submit"
                    class="text-xl border border-black px-6 py-2 rounded-xl hover:bg-gray-100">登録</button>
            </div>

        </form>
    </div>
</x-admin-layout>
