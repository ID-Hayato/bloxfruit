<x-admin-layout>

    <div class="w-full">
     
        <h1 class="text-center text-4xl mb-4">能力の登録</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('another_fruit_skill.store') }}" method="post">
            @csrf
            <input type="hidden" value="{{$id}}" name="id">

            <h1 class="text-center text-red-500  text-xl mb-5">以下変身、覚醒がある場合のみ設定</h1>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">変化元能力の名前</p>
                <x-input-error :messages="$errors->get('fruit_name')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="text" name="fruit_name" class="w-2/4" value="{{ old('fruit_name') }}">
                </div>
            </div>
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">技の変化タイプを選択</p>
                <x-input-error :messages="$errors->get('another_skill_type')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <select name="another_skill_type" class="w-1/5">
                        <option value=>変化なし</option>
                        <option value="Aweke">覚醒</option>
                        <option value="trans" class="text-blue-800">変身</option>
                    </select>
                </div>
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">変化タップスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_tap_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_tap_id" class="w-1/5">
                            <option value="">スキルを選んでください</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>


            <div class="border-b-2 w-full mb-2">
                <p class="text-center">変化ｚスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_z_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_z_id" class="w-1/5">
                            <option value="">スキルを選んでください</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">変化ｘスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_x_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_x_id" class="w-1/5">
                            <option value="">スキルを選んでください</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">変化ｃスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_c_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_c_id" class="w-1/5">
                            <option value="">スキルを選んでください</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">変化ｖスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_v_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_v_id" class="w-1/5">
                            <option value="">スキルを選んでください</option>
                            @foreach ($skills as $skill)
                                <option value="{{ $skill->id }}">{{ $skill->common_name }}</option>
                            @endforeach
                        </select>
                    </label>
                </div>
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">変化ｆスキルを選択</p>
                <x-input-error :messages="$errors->get('another_skill_f_id')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <label>
                        <select name="another_skill_f_id" class="w-1/5">
                            <option value="">スキルを選んでください</option>
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
