<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog</title>
        <style>
        
        .top {
            background-color: black;
            color: #fff;
            padding: 10px;
            position: sticky;
            top: 0;
            z-index: 2; /* 他の要素の上に表示 */
        }
        
        .divider {
            border-top: 1px solid black;
            height: 100%; /* 要素の高さいっぱいに線を引く */
            position: absolute; /* 絶対位置指定 */
            top: 0;
        }
        
        .divider {
            border-top: 1px solid #ccc;
            margin: 0px 0;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            height: 100vh; /* 画面の高さいっぱいに表示 */
        }
        
        .middle {
            background-color: #001d42;
            flex-grow: 1; /* 空きスペースを埋める */
            overflow-y: scroll; /* 縦スクロールを有効にする */
            padding: 10px;
            color: orange;
        }
        
        .bubble {
            background-color: black;
            color: #fff;
            border-radius: 25px;
            padding: 5px 10px;
            margin: 5px;
            text-align: left;
            display: inline-block; /* バブルをインラインブロック要素に設定 */
    max-width: 80%; /* バブルの最大幅を設定 */
    word-wrap: break-word; /* 長いテキストがはみ出さないように改行 */
    position: relative; /* 親要素の相対位置指定 */
        }
        
        .bubble-link {
    color: orange; /* リンクのテキストカラー */
    position: absolute; /* 絶対位置指定 */
    bottom: 5px; /* 下からの位置調整 */
    right: 10px; /* 右からの位置調整 */
}
        
        a {
    color: orange; /* ここで新しいテキストカラーを指定 */
  }
        .right-align {
    display: inline-block;
}
        </style>
        <!-- Fonts -->
    </head>
    <body>
        <div class="container">
            <div class="top">
        <h1>ハロウィンへようこそ！</h1>
        <a href='/posts/create'>ささやく</a>
        </div>
                <div class="divider"></div>
        <div class="middle">
            @foreach ($posts as $post)
            <li class="right-align">
    <div class="bubble"><a href="/posts/{{ $post->id }}">{{ $post->title }}<br>
    {{ $post->body }}</a>
    </div>
    </li>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
        </div>
    </body>
</html>