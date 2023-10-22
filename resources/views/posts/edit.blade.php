<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chokokutai&family=Palette+Mosaic&display=swap" rel="stylesheet">
        <style>
        
        /*Trickボタンを押した際の変化*/
        .Trick1{
                color:#106c58;
                font-family: 'Chokokutai', sans-serif;
                }
                
        .Trick2{
                filter: blur(1.5px);
                font-family:'Chokokutai';
                }
                
        .Trick3{
                filter: drop-shadow(0 10px 8px rgb(0 0 0 / 0.04)) drop-shadow(0 4px 3px rgb(0 0 0 / 0.1));
                font-family:'Palette Mosaic', cursive;
                }
                
        .Trick4{
                color:#CC3300;
                font-family: 'Palette Mosaic', cursive;
                }
        
        .Trick5{
               font-family: 'Palette Mosaic', cursive;
                }
        
        
         .top {
            background-color: Black;
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
    	
    	.btnripple{
            /*波紋の基点とするためrelativeを指定*/
        	position: relative;
            /*はみ出す波紋を隠す*/
        	overflow: hidden;
            /*ボタンの形状*/
            text-decoration: none;
        	display:inline-block;
        	background: #333;
        	color: #fff;
        	padding: 10px 20px;
        	border-radius: 25px;
            outline: none;
        }
        
        .btnripple::after {
            content: "";
            /*絶対配置で波紋位置を決める*/
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            /*波紋の形状*/
            background: radial-gradient(circle, #fff 10%, transparent 10%) no-repeat 50%;
            transform: scale(10, 10);
            /*はじめは透過0に*/
            opacity: 0;
            /*アニメーションの設定*/
            transition: transform 0.3s, opacity 1s;
        }
        
        /*クリックされたあとの形状の設定*/
            .btnripple:active::after {
            transform: scale(0, 0);
            transition: 0s;
            opacity: 0.3;
        }
        </style>
        
    </head>
    <body>
        <div class="top">
            <h1 class="title">Trick</h1>
        </div>
        
        <div class="divider"></div>
      
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
            <button id="replaceButton1" class="btnripple">Trick1</button>
            <button id="replaceButton2" class="btnripple">Trick2</button>
            <button id="replaceButton3" class="btnripple">Trick3</button>
            <button id="replaceButton4" class="btnripple">Trick4</button>
            <button id="replaceButton5" class="btnripple">Trick5</button>
         </div>
    </body>
    <script>
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
        
        document.getElementById('replaceButton5').addEventListener('click', function() {
          var selectedText = window.getSelection().toString();
          var newText = "<nobr class=Trick5>🎃🎃" + selectedText + "🎃🎃</nobr>";

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
