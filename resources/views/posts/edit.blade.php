<x-layout>
    <x-slot name="title">
        編集画面
    </x-slot>
    <div class="back-link mt-5">
        &laquo; <a href="{{ url()->previous() }}">Back</a>
    </div>

    <h1 class="text-lg mt-5 font-bold py-5 flex border-b-2 justify-between item-center">
        {{ $post->crime_name }}  編集
    </h1>

    <form action="{{ route('posts.update', ['genre_id' => $genre_id, 'post_id' => $post->id]) }}" method="POST" class="mt-6">
        @method('PATCH')
        @csrf

        <h4 class="font-semibold">＜概要＞</h4>
        <div class="crime-inner flex">
                犯罪事実：<textarea name='crime_fact' class="block bg-gray-200 border py-1 px-2 h-20 w-80 mr-3">{{ old('crime_fact', $post->crime_fact) }}</textarea>
            <label for="crime_name">
                罪名：<input type="text" name="crime_name" class="block bg-gray-200 mr-3" value="{{ old('crime_name', $post->crime_name) }}">
            </label>
            <label for="crime_date">
                発生日：<input type="text" name="crime_date" class="block bg-gray-200 mr-3" value="{{ old('crime_date', $post->crime_date) }}">
            </label>
            <label for="crime_time">
                発生時間：<input type="text" name="crime_time" class="block bg-gray-200 mr-3" value="{{ old('crime_time', $post->crime_time) }}">
            </label>
        </div>

        発生場所：<input type="text" name="crime_place" class="bg-gray-200 w-2/3 py-1 px-2 mt-3" value="{{ old('crime_place', $post->crime_place) }}">

        <h4 class="font-semibold mt-5">＜被疑者＞</h4>
        <div class="suspect-inner">
            本籍：<input type="text" name="suspect_honseki" class="bg-gray-200 w-2/3 mb-3 py-1 px-2" value="{{ old('suspect_honseki', $post->suspect_honseki) }}"><br>
            住居：<input type="text" name="suspect_address" class="bg-gray-200 w-2/3 mb-3 py-1 px-2" value="{{ old('suspect_address', $post->suspect_address) }}"><br>
            職業：<input type="text" name="suspect_work" class="bg-gray-200 w-1/6 mr-2 py-1 px-2" value="{{ old('suspect_work', $post->suspect_work) }}">
            氏名：<input type="text" name="suspect_name" class="bg-gray-200 w-1/5 mr-3 py-1 px-2" value="{{ old('suspect_name', $post->suspect_name) }}">
            生年月日：<input type="text" name="suspect_birthday" class="bg-gray-200 w-1/5 py-1 px-2" value="{{ old('suspect_birthday', $post->suspect_birthday) }}">
        </div>

        <h4 class="font-semibold mt-5">＜被害者＞</h4>
        <div class="suspect-inner">
            住居：<input type="text" name="victim_address" class="bg-gray-200 w-2/3 mb-3 py-1 px-2" value="{{ old('victim_address', $post->victim_address) }}"><br>
            職業：<input type="text" name="victim_work" class="bg-gray-200 w-1/6 mr-2 py-1 px-2" value="{{ old('victim_work', $post->victim_work) }}">
            氏名：<input type="text" name="victim_name" class="bg-gray-200 w-1/5 mr-3 py-1 px-2" value="{{ old('victim_name', $post->victim_name) }}">
            生年月日：<input type="text" name="victim_birthday" class="bg-gray-200 w-1/5 py-1 px-2" value="{{ old('victim_birthday', $post->victim_birthday) }}">
        </div>

        <button class="bg-amber-300 hover:bg-amber-400 py-3 px-5 mt-5 font-semibold rounded">更新する</button>
    </form>

</x-layout>
