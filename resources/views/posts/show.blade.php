<x-layout>
    {{-- ページ名 --}}
    <x-slot name='title'>
        {{ $post->crime_name }} 編集
    </x-slot>

    {{-- 戻るボタン --}}
    <div class="back-link mt-5">
        &laquo; <a href="{{ url()->previous() }}" class="hover:underline">Back</a>
    </div>

    {{-- タイトル --}}
    <h1 class="text-lg mt-5 font-bold py-5 flex border-b-2 justify-between item-center">
        <span>{{ $post->crime_name }} 被疑事件</span>
        <a href="{{ route('posts.edit', ['genre_id' => $genre_id, 'post_id' => $post->id]) }}" class="text-red-500 hover:underline">編集する</a>
        <form action="{{ route('posts.destroy', ['genre_id' => $genre_id, 'post_id' => $post->id]) }}" method="post">
            @method('DELETE')
            @csrf

            <button class="border-none text-lg font-nomal text-sky-700 aline-baseline hover:underline">[X]削除</button>
        </form>
    </h1>

    {{-- 投稿事件詳細 --}}
    <div class="post-inner">
        <label for="">
            <h4 class="mt-3 font-semibold"><概要></h4>
            発生日：{{ $post->crime_date }}<br>
            発生時間：{{ $post->crime_time }}<br>
        </label>
        <label for="">
            罪名：{{ $post->crime_name }}<br>
        </label>
        <label for="">
            事実：{{ $post->crime_fact }}
        </label>
        <label for="">
            <h4 class="mt-3 font-semibold"><被疑者></h4>
            本籍：{{ $post->suspect_honseki }}<br>
            住居：{{ $post->suspect_address }}<br>
            職業：{{ $post->suspect_work }}<br>
            氏名：{{ $post->suspect_name }}<br>
            生年月日：{{ $post->suspect_birthdate }}
        </label>
        <label for="">
            <h4 class="mt-3 font-semibold"><被害者></h4>
            住居：{{ $post->victim_address }}<br>
            職業：{{ $post->victim_work }}<br>
            氏名：{{ $post->victim_name }}<br>
            生年月日：{{ $post->victim_birthdate }}
        </label>
    </div>

    </div>
</x-layout>
