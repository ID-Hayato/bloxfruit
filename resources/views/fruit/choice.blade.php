<x-admin-layout>
    <div class="w-full">
        <h1 class="text-center text-4xl mb-4">登録が完了しました。</h1>
        <div class="flex justify-center gap-4">
            <div class="border rounded-lg border-black w-60 text-center">
                <a href="">
                    <h1>管理用ページTOPへ戻る</h1>
                </a>
            </div>


            <form action="{{ route('fruit.jump') }}" method="post">
                @csrf
                <div class="border rounded-lg border-black w-60 text-center">
                    <input type="hidden" value="{{$id}}" name="id">
                    <input type="submit" value="覚醒、変身の登録をする。">

                </div>


            </form>
        </div>

    </div>



</x-admin-layout>
