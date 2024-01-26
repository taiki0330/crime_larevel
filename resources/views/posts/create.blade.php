<x-layout>
    <x-slot name="title">
        新規作成
    </x-slot>
    <div class="back-link mt-5">
        &laquo; <a href="{{ url()->previous() }}">Back</a>
    </div>

    <h1 class="text-lg mt-5 font-bold py-5 flex border-b-2 justify-between item-center">
        {{ $genre->genre_name }}  新規事件作成
    </h1>

    <form action="{{ route('posts.store', $genre) }}" method="POST" class="mt-6">
        @csrf

        <h4 class="font-semibold">＜概要＞</h4>
        <div class="crime-inner flex">
                犯罪事実：<textarea name='crime_fact' class="block bg-gray-200 border py-1 px-2 h-20 w-80 mr-3"></textarea>
            <label for="crime_name">
                罪名：<input type="text" name="crime_name" class="block bg-gray-200 mr-3">
            </label>
            <label for="crime_date">
                発生日：<input type="text" name="crime_date" class="block bg-gray-200 mr-3">
            </label>
            <label for="crime_time">
                発生時間：<input type="text" name="crime_time" class="block bg-gray-200 mr-3">
            </label>
        </div>

        発生場所：<input type="text" name="crime_place" class="bg-gray-200 w-2/3 py-1 px-2 mt-3">

        <h4 class="font-semibold mt-5">＜被疑者＞</h4>
        <div class="suspect-inner">
            本籍：<input type="text" name="suspect_honseki" class="bg-gray-200 w-2/3 mb-3 py-1 px-2"><br>
            住居：<input type="text" name="suspect_address" class="bg-gray-200 w-2/3 mb-3 py-1 px-2"><br>
            職業：<input type="text" name="suspect_work" class="bg-gray-200 w-1/6 mr-2 py-1 px-2">
            氏名：<input type="text" name="suspect_name" class="bg-gray-200 w-1/5 mr-3 py-1 px-2">
            生年月日：<input type="text" name="suspect_birthday" class="bg-gray-200 w-1/5 py-1 px-2">
        </div>

        <h4 class="font-semibold mt-5">＜被害者＞</h4>
        <div class="suspect-inner">
            住居：<input type="text" name="victim_address" class="bg-gray-200 w-2/3 mb-3 py-1 px-2"><br>
            職業：<input type="text" name="victim_work" class="bg-gray-200 w-1/6 mr-2 py-1 px-2">
            氏名：<input type="text" name="victim_name" class="bg-gray-200 w-1/5 mr-3 py-1 px-2">
            生年月日：<input type="text" name="victim_birthday" class="bg-gray-200 w-1/5 py-1 px-2">
        </div>

        <button class="bg-teal-200 hover:bg-teal-300 py-3 px-5 mt-5 rounded font-semibold">登録する</button>
    </form>

</x-layout>
