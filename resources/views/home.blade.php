<x-layout>
    {{-- ページ名 --}}
    <x-slot name='title'>
        事件管理
    </x-slot>

    {{-- タイトル --}}
    <h1 class="text-lg mt-5 font-bold py-5 flex border-b-2 justify-between item-center">
        事件管理
    </h1>

    {{-- ジャンルリスト(genres_model) --}}
    <div class="genre_list shadow pt-5 pb-8 my-5">
        <ul class="mt-6">
            @foreach ( $genres as $genre)
                <li class="mt-3 flex justify-center">
                    <a href="{{ route('genres.show', $genre) }}" class="font-semibold hover:underline">
                        {{ $genre->genre_name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
