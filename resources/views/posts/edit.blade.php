<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chokokutai&family=Rock+3D&display=swap" rel="stylesheet">
        <style>
        
        .Trick1{color:red;
                font-family:Chokokutai;
                }
                
         .Trick2{filter: blur(1.5px);
                font-family:Chokokutai;
                }
                
         .Trick3{filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
                font-family:Chokokutai;
                }
                
         .Trick4{color:teal;
                font-family:Rock 3D;
                }
        
         </style>
        
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
             <div class='content__title'>
                    <h2>タイトル</h2>
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <h2>{{ $post->body }}</h2>
                    
                </div>
            
             <button id="replaceButton1">Trick1</button>
             <button id="replaceButton2">Trick2</button>
             <button id="replaceButton3">Trick3</button>
             <button id="replaceButton4">Trick4</button>
        </div>
    </body>
    <script>
        // ボタンがクリックされたときに実行される関数
        document.getElementById('replaceButton1').addEventListener('click', function() {
            var selectedText = window.getSelection().toString();
            var newText = "<nobr class=Trick1>" + selectedText + "</nobr>";

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
         document.getElementById('replaceButton2').addEventListener('click', function() {
            var selectedText = window.getSelection().toString();
            var newText = "<nobr class=Trick2>" + selectedText + "</nobr>";

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
         document.getElementById('replaceButton3').addEventListener('click', function() {
            var selectedText = window.getSelection().toString();
            var newText = "<nobr class=Trick3>" + selectedText + "</nobr>";

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
         document.getElementById('replaceButton4').addEventListener('click', function() {
            var selectedText = window.getSelection().toString();
            var newText = "<nobr class=Trick4>" + selectedText + "</nobr>";

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