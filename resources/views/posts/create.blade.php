<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
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
            
            color: orange;
        }
        body {
    background-color: #001d42;
}
.bubble-link {
    background-color: #AD002D;
            color: #fff;
            border-radius: 25px;
            padding: 5px 10px;
            margin: 5px;
            text-align: left;
            display: flex; /* バブルをインラインブロック要素に設定 */
    max-width: 80%; /* バブルの最大幅を設定 */
    word-wrap: break-word; /* 長いテキストがはみ出さないように改行 */
    position: relative; /* 絶対位置指定 */
    top: 30px; /* 下からの位置調整 */

}
.bubble {
            background-color: black;
            color: orange;
            border-radius: 25px;
            padding: 5px 10px;
            margin: 5px;
            max-width: 100%; /* バブルの最大幅を100%に設定 */
    word-wrap: break-word; /* 長いテキストがはみ出さないように改行 */
    position: relative; /* 絶対位置指定 */
    top: 30px; 
    max-width: 4%; /* バブルの最大幅を100%に設定 */
    word-wrap: break-word; /* 長いテキストがはみ出さないように改行 */
    }
        .bubble a {
    color: orange; /* リンクのテキストカラー */
}
        </style>
    </head>
    <body>
        <div class="top">
        <h2>きままにささやこう</h2>
        <h3>ハロウィンと言えば？あなただけがしっているコト</h3>
        </div>
         <div class="middle">
        <form action="/posts" method="POST">
            @csrf
            
                <h2>題して</h2>
                <input type="text" name="post[title]" placeholder="本当にあったハロウィン" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            
            <div>
                <h2>これについて興味ある？</h2>
                <textarea name="post[body]" placeholder="高クオリティ仮装…渋谷ハロウィン…">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="ささやく"/>
        </form>
<div class="bubble">
            <a href="/">戻る</a>

        </div>
    </body>
</html>
