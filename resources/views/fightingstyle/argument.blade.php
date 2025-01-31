<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">格闘の更新・削除</h1>
        
        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('fightingstyle.branch') }}" method="post">
        @csrf
            
            <div class="text-center mb-3 ">
                <p class="text-center">変更する格闘を選択</p>
                <x-input-error :messages="$errors->get('fightingstyle_id')" class="my-2 text-center" />
                <label>
                    <select name="fightingstyle_id" class="w-3/5" >
                        <option value="">格闘を選んでください</option>
                        @foreach ($fighting_styles as $fighting_style)
                            <option value="{{ $fighting_style->id }}">id {{$fighting_style->id}}　{{$fighting_style->name}}　</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="text-center mb-3 ">
                <p class="text-center">行う操作の選択</p>
                <div class="flex justify-center">
                        <button type="submit" name="branch" value="update">更新</button>
                        <button type="submit" name="branch" value="delete">削除</button>
                </div>
            </div>
        </form>
    </div>
</x-admin-layout>
