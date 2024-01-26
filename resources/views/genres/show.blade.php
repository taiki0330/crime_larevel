<x-layout>
    {{-- ページ名 --}}
    <x-slot name='title'>
        {{ $genre->genre_name }}
    </x-slot>

    {{-- 戻るボタン --}}
    <div class="back-link mt-5">
        &laquo; <a href="{{ route('home') }}" class="hover:underline">Back</a>
    </div>

    {{-- タイトル --}}
    <h1 class="text-lg mt-5 font-bold py-5 flex border-b-2 justify-between item-center">
        <span>{{ $genre->genre_name }}</span>
        <a href="{{ route('posts.create', $genre) }}">新しく追加</a>
    </h1>

    {{-- 事件投稿リスト --}}
    <div class="genre_list shadow pt-5 pb-8 my-5">
        <ul class="mt-6">
            @foreach ( $genre->posts()->latest()->get() as $post)
                <li class="mt-3 flex justify-center">
                    <a href="{{ route('posts.show', ['genre_id' => $genre->id, 'post_id' => $post->id]) }}" class="font-semibold hover:underline">
                        {{ $post->crime_date }}
                        {{ $post->crime_name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
