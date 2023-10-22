<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Trick;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    
     public function create()
    {
        return view('posts/create');
    }

    public function show(Post $post)
    {
        // Trickモデルにアクセスし、指定されたpost_idに関連するトリックを取得
$tricks = Trick::where('post_id', $post_id)->get();

// postテーブルからトリックに関連しない投稿を取得
$unrelatedPosts = Post::whereNotIn('id', $tricks->pluck('post_id'))->get();

$combinedData = $tricks->concat($unrelatedPosts);

// 作成日順に並べ替え
$combinedData = $combinedData->sortBy('created_at');
        
        return view('posts/show')->with(['posts' => $combinedData]);
    }

    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

}
