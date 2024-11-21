<x-admin-layout>

    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">スキル登録</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('skill.store') }}" method="post">
            @csrf
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">スキル名</p>
                <x-input-error :messages="$errors->get('name')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="text" name="name" class="w-3/4" value="{{ old('name') }}">
                </div>

            </div>
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">略称（○○○Ｚなど）</p>
                <x-input-error :messages="$errors->get('common_name')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="text" name="common_name" class="w-3/4" value="{{ old('common_name') }}">
                </div>

            </div>
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">技の説明文</p>
                <x-input-error :messages="$errors->get('description')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <textarea name="description" class="w-3/4" id="" cols="30" rows="10"
                        value="">{{ old('description') }}</textarea>
                </div>

            </div>
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">見聞</p>
                <x-input-error :messages="$errors->get('dodge')" class="my-2 text-center" />
                <div class="text-center mb-3 flex justify-center gap-2">
                    <label>
                        <div class=" border-2 p-2 rounded-xl">
                            <input type="radio" name="dodge" value="0" value="{{ old('dodge') }}">　不可
                        </div>
                    </label>
                    <label>
                        <div class=" border-2 p-2  rounded-xl">
                            <input type="radio" name="dodge" value="1" value="{{ old('dodge') }}">　可
                        </div>
                    </label>
                </div>
                <p class="text-center">見聞補足説明</p>
                <x-input-error :messages="$errors->get('dodge_specialmention')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <textarea name="dodge_specialmention" class="w-3/4 h-16" id="" cols="30" rows="10"
                        value="">{{ old('dodge_specialmention') }}</textarea>
                </div>
            </div>
            <div class="border-b-2 w-full mb-2">
                <p class="text-center">クールタイム</p>
                <x-input-error :messages="$errors->get('cooldown')" class="my-2 text-center" />
                <div class="text-center mb-3">
                    <input type="number" name="cooldown" step="0.1" class="w-20" value="{{ old('cooldown') }}">
                </div>

            </div>
            <div class="border-b-2 w-full my-3 text-center">
                <button type="submit"
                    class="text-xl border border-black px-6 py-2 rounded-xl hover:bg-gray-100">登録</button>
            </div>

        </form>
    </div>

</x-admin-layout>
