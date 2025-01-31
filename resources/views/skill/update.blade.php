<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">スキルデータの更新</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('skill.update', $skills) }}" method="post">
            @csrf
            <div class="text-center mb-3 ">
                <p class="text-center">スキルid</p>
                <x-input-error :messages="$errors->get('id')" class="my-2 text-center" />
                <input type="number" name="id" value="{{ $skills->id }}">
            </div>
            <div class="text-center mb-3 ">
                <p class="text-center">スキル名</p>
                <x-input-error :messages="$errors->get('name')" class="my-2 text-center" />
                <input type="text" name="name" value="{{ $skills->name }}">
            </div>
            <div class="text-center mb-3 ">
                <p class="text-center">通称</p>
                <x-input-error :messages="$errors->get('common_name')" class="my-2 text-center" />
                <input type="text" name="common_name" value="{{ $skills->common_name }}">
            </div>

            <div class="text-center mb-3 ">
                <p class="text-center">スキルの説明文</p>
                <x-input-error :messages="$errors->get('description ')" class="my-2 text-center" />
                <textarea name="description" cols="50" rows="10">{{ $skills->description }}</textarea>
            </div>
            <div class="border-b-2  mb-2">
                <p class="text-center">見聞</p>
                <x-input-error :messages="$errors->get('dodge')" class="my-2 text-center" />
                <div class="text-center mb-3 flex justify-center gap-2">
                    <label>
                        <div class=" border-2 p-2 rounded-xl">
                            <input type="radio" name="dodge" value="0"
                                @if ($skills->dodge === 0) checked @endif>　不可
                        </div>
                    </label>
                    <label>
                        <div class=" border-2 p-2  rounded-xl">
                            <input type="radio" name="dodge" value="1"
                                @if ($skills->dodge === 1) checked @endif>　可
                        </div>
                    </label>
                </div>
            </div>
            <div class="text-center mb-3 ">
                <x-input-error :messages="$errors->get('dodge_specialmention')" class="my-2 text-center" />
                <p class="text-center">見聞補足説明</p>
                <input type="text" class="w-3/4 h-" name="dodge_specialmention"
                    value="{{ $skills->dodge_specialmention }}">
            </div>

            <div class="border-b-2 w-full mb-2">
                <p class="text-center">クールタイム</p>
                <x-input-error :messages="$errors->get('cooldown')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="number" name="cooldown" step="0.1" class="w-20" value="{{ $skills->cooldown }}">
                </div>
            </div>
            <div class="border-b-2 w-full my-3 text-center">
                <button type="submit"
                    class="text-xl border border-black px-6 py-2 rounded-xl hover:bg-gray-100">登録</button>
            </div>
        </form>
    </div>
</x-admin-layout>
