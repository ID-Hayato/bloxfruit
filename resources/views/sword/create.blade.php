<x-admin-layout>

    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">剣の登録</h1>

        <form action="{{ route('sword.store') }}" method="post">
            @csrf
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">剣の名前</p>
                <x-input-error :messages="$errors->get('name')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="text" name="name" class="w-3/4" value="{{ old('name') }}">
                </div>
            </div>

            <div class=" w-full mb-2">
                <p class="text-center">ｚスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_z_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_z_id" class="w-1/5">
                            <option value="">スキルを選んでください</option>
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
                    <input type="number" name="skill_z_mastery" class="w-1/8" value="{{ old('skill_z_mastery') }}">
                </div>
            </div>

            <div class=" w-full mb-2">
                <p class="text-center">ｘスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_x_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_x_id" class="w-1/5">
                            <option value="">スキルを選んでください</option>
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
                    <input type="number" name="skill_x_mastery" class="w-1/8" value="{{ old('skill_x_mastery') }}">
                </div>
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">レア度を選択</p>
                <x-input-error :messages="$errors->get('rerity')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <select name="skill_x_id" class="w-1/5">
                        <option value="Common">コモン</option>
                        <option value="Uncommon" class="text-blue-800">アンコモン</option>
                        <option value="Rare" class="text-purple-800">レア</option>
                        <option value="Legendary" class="text-pink-800">レジェンダリー</option>
                        <option value="Mythical" class="text-red-800">ミシック</option>


                    </select>
                </div>
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">入手方法を記載</p>
                <x-input-error :messages="$errors->get('howtogetit')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <textarea name="howtogetit" class="w-3/4" id="" cols="30" rows="10" value="">{{ old('howtogetit') }}</textarea>
                </div>
            </div>

            <div class="border-b-2 w-full my-3 text-center">
                <button type="submit"
                    class="text-xl border border-black px-6 py-2 rounded-xl hover:bg-gray-100">登録</button>
            </div>

        </form>
    </div>


</x-admin-layout>
