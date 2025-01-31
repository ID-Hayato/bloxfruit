<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">能力データの更新</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('fruit.update', $fruit) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $fruit->id}}">
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">能力の名前</p>
                <x-input-error :messages="$errors->get('name')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="text" name="name" class="w-2/4" value="{{ $fruit->name }}">
                </div>
            </div>
            
            <div class=" w-full mb-2">
                <p class="text-center">タップスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_tap_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_tap_id" class="w-1/5">
                            <option value="{{ $fruit->skill_tap_id }}">
                                {{ $skills->firstWhere('id', $fruit->skill_tap_id)->common_name ?? '未実装'}}
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
                <x-input-error :messages="$errors->get('skill_z_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_z_id" class="w-1/5">
                            <option value="{{ $fruit->skill_z_id }}">
                                {{ $skills->firstWhere('id', $fruit->skill_z_id)->common_name }}
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
                        value="{{ $fruit->skill_z_mastery }}">
                </div>
            </div>
            <div class=" w-full mb-2">
                <p class="text-center">ｘスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_x_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_x_id" class="w-1/5">
                            <option value="{{ $fruit->skill_x_id }}">
                                {{ $skills->firstWhere('id', $fruit->skill_x_id)->common_name }}</option>
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
                        value="{{ $fruit->skill_x_mastery }}">
                </div>
            </div>
            <div class=" w-full mb-2">
                <p class="text-center">ｃスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_c_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_c_id" class="w-1/5">
                            <option value="{{ $fruit->skill_c_id }}">
                                {{ $skills->firstWhere('id', $fruit->skill_c_id)->common_name }}</option>
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
                        value="{{ $fruit->skill_x_mastery }}">
                </div>
            </div>
            <div class=" w-full mb-2">
                <p class="text-center">ｖスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_v_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_v_id" class="w-1/5">
                            <option value="{{ $fruit->skill_v_id }}">
                                {{ $skills->firstWhere('id', $fruit->skill_v_id)->common_name ?? '未実装'}}
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
                <x-input-error :messages="$errors->get('skill_v_mastery')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="number" name="skill_v_mastery" class="w-1/8"
                        value="{{ $fruit->skill_v_mastery }}">
                </div>
            </div>
            <div class=" w-full mb-2">
                <p class="text-center">ｆスキルを選択</p>
                <x-input-error :messages="$errors->get('skill_f_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="skill_f_id" class="w-1/5">
                            <option value="{{ $fruit->skill_f_id }}">
                                {{ $skills->firstWhere('id', $fruit->skill_f_id)->common_name ?? '未実装'}}
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
                <x-input-error :messages="$errors->get('skill_f_mastery')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="number" name="skill_f_mastery" class="w-1/8"
                        value="{{ $fruit->skill_f_mastery }}">
                </div>
            </div>
         
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">レア度を選択</p>
                <x-input-error :messages="$errors->get('rerity')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <select name="rarity" class="w-1/5">
                        <option value="{{ $fruit->rarity }}">
                            @if ($fruit->rarity === 'Common')
                                コモン
                            @elseif($fruit->rarity === 'Uncommon')
                                アンコモン
                            @elseif($fruit->rarity === 'Rare')
                                レア
                            @elseif($fruit->rarity === 'Legendary')
                                レジェンダリー
                            @elseif($fruit->rarity === 'Mythical')
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
                <p class="text-center">実の値段</p>
                <x-input-error :messages="$errors->get('price')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="number" name="price" class="w-1/8" value="{{$fruit->price}}">
                </div>
            </div>
            <div class="border-b-2 w-full my-3 text-center">
                <button type="submit"
                    class="text-xl border border-black px-6 py-2 rounded-xl hover:bg-gray-100">登録</button>
            </div>

        </form>
    </div>
</x-admin-layout>
