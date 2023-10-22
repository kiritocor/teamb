<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Trick;

class PostController extends Controller
{
    public function index(Post $post, Trick $trick)
    {
        // Trickモデルにアクセスし、指定されたpost_idに関連するトリックを取得
        $tricks = $trick->get();
        
        // postテーブルからトリックに関連しない投稿を取得
        $unrelatedPosts = Post::whereNotIn('id', $tricks->pluck('post_id'))->get();
        
        $combinedData = $tricks->concat($unrelatedPosts);
        
        // 作成日順に並べ替え
        $combinedData = $combinedData->sortByDesc('created_at');
        
        return view('posts/index')->with(['posts' => $combinedData]);
    }
    
     public function create()
    {
        return view('posts/create');
    }

    public function show(Post $post, Trick $trick)
    {
        // Trickモデルにアクセスし、指定されたpost_idに関連するトリックを取得
        $tricks = $trick->get();
        
        // postテーブルからトリックに関連しない投稿を取得
        $unrelatedPosts = Post::whereNotIn('id', $tricks->pluck('post_id'))->get();
        
        $combinedData = $tricks->concat($unrelatedPosts);
        
        // 作成日順に並べ替え
        $combinedData = $combinedData->sortByDesc('created_at');
        
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

    public function update(Request $request, Trick $trick)
    {
        
        $data = json_decode($request->getContent(), true);
        // データベースに保存 
        // HTMLデータからtitleとbodyを抽出する方法については注意が必要です。 
        // この例では、titleタグとbodyタグを正規表現を使用して抽出しています。 
        // 実際のHTML構造に合わせて調整してください。 
        // Titleを抽出 
        $title = $data[0];
        // Bodyを抽出
        $body = $data[1];
        $id = $data[2];
        
        $trick->title=$title;
        $trick->body=$body;
        $trick->post_id=$id;
        // データベースに保存
        $trick->save();
        
        return redirect('/');
    }

}
