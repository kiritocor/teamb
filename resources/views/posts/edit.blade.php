<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
             <button id="replaceButton">選択範囲を書き換える</button>
        </div>
    </body>
    <script>
        // ボタンがクリックされたときに実行される関数
        document.getElementById('replaceButton').addEventListener('click', function() {
            var selectedText = window.getSelection().toString();
            var newText = "<h1>" + selectedText + "</h1>";

            var selection = window.getSelection();
            if (selection.rangeCount > 0) {
                var range = selection.getRangeAt(0);
                range.deleteContents();

                var container = document.createElement("div");
                container.innerHTML = newText;

                while (container.firstChild) {
                range.insertNode(container.firstChild);
                }
            }
        });
    </script>
</html>
