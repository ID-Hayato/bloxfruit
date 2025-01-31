<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">スキルデータの更新</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('sword.update', $sword) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $sword->id }}">
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">拳の名前</p>
                <x-input-error :messages="$errors->get('name')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="text" name="name" class="w-2/4" value="{{ $sword->name }}">
                </div>
            </div>



            <div class=" w-full mb-2">
                <p class="text-center">ｚスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_z_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_z_id" class="w-1/5">
                            <option value="{{ $sword->skill_z_id }}">
                                {{ $skills->firstWhere('id', $sword->skill_z_id)->common_name }}
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
                    <input type="number" name="skill_z_mastery" class="w-1/8" value="{{ $sword->skill_z_mastery }}">
                </div>
            </div>
            <div class=" w-full mb-2">
                <p class="text-center">ｘスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_x_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_x_id" class="w-1/5">
                            <option value="{{ $sword->skill_x_id }}">
                                {{ $skills->firstWhere('id', $sword->skill_x_id)->common_name }}</option>
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
                    <input type="number" name="skill_x_mastery" class="w-1/8" value="{{ $sword->skill_x_mastery }}">
                </div>
            </div>
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">レア度を選択</p>
                <x-input-error :messages="$errors->get('rerity')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <select name="rarity" class="w-1/5">
                        <option value="{{ $sword->rarity }}">
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
                        </option>
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
                    <textarea name="howtogetit" class="w-3/4" id="" cols="30" rows="10" value="">{{ $sword->howtogetit }}</textarea>
                </div>
            </div>
            <div class="border-b-2 w-full my-3 text-center">
                <button type="submit"
                    class="text-xl border border-black px-6 py-2 rounded-xl hover:bg-gray-100">登録</button>
            </div>

        </form>
    </div>
</x-admin-layout>
