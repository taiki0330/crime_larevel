<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($genre_id, $post_id)
    {
        $post = Post::where('id', $post_id)->first();

        return view('posts.show')->with(['post' => $post, 'genre_id' => $genre_id]);
    }

    public function create($id)
    {
        $genre = Genre::find($id);
        return view('posts.create')->with(['genre' => $genre]);
    }

    public function store(Request $request, $id)
    {
        $post = new Post();
        $post->genre_id = $id;
        $post->crime_fact = $request->crime_fact;
        $post->crime_date = $request->crime_date;
        $post->crime_time = $request->crime_time;
        $post->crime_place = $request->crime_place;
        $post->crime_name = $request->crime_name;
        $post->suspect_honseki = $request->suspect_honseki;
        $post->suspect_address = $request->suspect_address;
        $post->suspect_work = $request->suspect_work;
        $post->suspect_name = $request->suspect_name;
        $post->suspect_birthday = $request->suspect_birthday;
        $post->victim_address = $request->victim_address;
        $post->victim_work = $request->victim_work;
        $post->victim_name = $request->victim_name;
        $post->victim_birthday = $request->birthday;
        $post->save();

        return redirect()
            ->route('genres.show', $id);
    }

    public function edit($genre_id, $post_id)
    {
        $post = Post::where('id', $post_id)->first();
        return view('posts.edit')->with(['post' => $post, 'genre_id' => $genre_id]);
    }

    public function update(Request $request, $genre_id, $post_id)
    {
        $post = Post::find($post_id);
        $post->genre_id = $genre_id;
        $post->crime_fact = $request->crime_fact;
        $post->crime_date = $request->crime_date;
        $post->crime_time = $request->crime_time;
        $post->crime_place = $request->crime_place;
        $post->crime_name = $request->crime_name;
        $post->suspect_honseki = $request->suspect_honseki;
        $post->suspect_address = $request->suspect_address;
        $post->suspect_work = $request->suspect_work;
        $post->suspect_name = $request->suspect_name;
        $post->suspect_birthday = $request->suspect_birthday;
        $post->victim_address = $request->victim_address;
        $post->victim_work = $request->victim_work;
        $post->victim_name = $request->victim_name;
        $post->victim_birthday = $request->birthday;
        $post->save();

        return redirect()
            ->route('genres.show', $genre_id);
    }

    public function destroy($genre_id, $post_id)
    {
        $post = Post::find($post_id);
        $post->delete();

        return redirect()
            ->route('genres.show', $genre_id);
    }
}
