<x-admin-layout>

    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">スキルの削除</h1>

        @if (session('message'))
            <div class="my-2 text-center text-red-600">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('skill.destroy', $skills ) }}" method="post">
            @csrf
            <h1 class="text-center text-red-500 text-3xl">⚠以下のデータを削除しようとしています⚠</h1>
            <div class="w-full">
                <ul class=" flex border">
                    <li>
                        <div>ID</div>
                        <div>{{ $skills->id }}</div>
                    </li>
                    <li>
                        <div>名前</div>
                        <div>{{ $skills->name }}</div>
                    </li>
                    <li>
                        <div>通称</div>
                        <div>{{ $skills->common_name }}</div>
                    </li>
                    <li >
                        <div>スキルの説明</div>
                        <div>{{ $skills->description }}</div>
                    </li>
                    <li>
                        <div>見聞判定</div>
                        <div>{{ $skills->dodge }}</div>
                    </li>
                    <li>
                        <div>見聞補足説明</div>
                        <div>{{ $skills->dodge_specialmention }}</div>
                    </li>
                    <li>
                        <div>クールタイム</div>
                        <div>{{ $skills->cooldown }}</div>
                    </li>
                </ul>
            </div>

  <h2 class="pt-2 text-center text-xl">よろしいですか？</h2>
  <input type="hidden" name="id" value="{{$skills->id}}">
    <button type="submit">
        削除
    </button>


        </form>
    </div>

  
</x-admin-layout>
