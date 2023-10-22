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
            color: orange;
            border-radius: 25px;
            padding: 5px 10px;
            margin: 5px;
            text-align: left;
            display: flex; /* バブルをインラインブロック要素に設定 */
            max-width: 80%; /* バブルの最大幅を設定 */
            word-wrap: break-word; /* 長いテキストがはみ出さないように改行 */
	        position: relative; /* 親要素の相対位置指定 */
        }
        
        a {
	        color: orange; /* ここで新しいテキストカラーを指定 */
	    }

        .right-align {
	        display: inline-block;
    	}

	    .bubble a {
	         color: orange; /* リンクのテキストカラー */
	    }

	    .bubble-link {
	        background-color: #AD002D;
            border-radius: 25px;
            padding: 5px 10px;
            margin: 5px;
            text-align: left;
            display: flex; /* バブルをインラインブロック要素に設定 */
    	    max-width: 80%; /* バブルの最大幅を設定 */
    	    word-wrap: break-word; /* 長いテキストがはみ出さないように改行 */
    	    position: relative; /* 絶対位置指定 */
    	    top: 30px; /* 下からの位置調整 */
    	    color: orange; /* リンクのテキストカラー */
    	    bottom: 5px; /* 下からの位置調整 */
    	    left: 10px; /* 右からの位置調整 */
    	}
	
    	.bubble-content {
    	    position: relative;
    	    display: flex;
    	    flex-direction: column;
    	}
    	.bubble-text {
    	    flex-grow: 1;
    	}
    	
    	.content__title{
    	    font-size: 1.5rem;
            line-height: 2rem;
    	}
    	body {
    	    background-color: #001d42;
    	}
        </style>
        
    </head>
    <body>
      <h1 class="title">編集画面</h1>
      <div class="content">
        <div class="bubble">
            <div class="bubble-content">
                <div class="bubble-text">
                    <div class='content__title'>
                        <span>{{ $post->title }}<br></span>
                    </div>
                    <div class='content__body'>
                        <span>{{ $post->body }}</span>
                    </div>
                </div>
            </div>
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
