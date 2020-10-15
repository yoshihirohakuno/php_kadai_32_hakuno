<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/post_style.css">
    <title>あなたの好きな日本酒は？</title>
</head>
<body>
    <div class="form_area">
    <h1>最近呑んだ日本酒は？</h1>
    <form action="write.php" method="post"  enctype="multipart/form-data">
        お名前/ID<input type="text" name="name" placeholder="お名前" size="30"><br />
        銘柄 <input type="text" name="title" placeholder="銘柄" size="50"><br />
        どんなお酒？<textarea  rows="4" cols="40" name="discription" placeholder="どんな内容でもOK"></textarea><br />
        <br>
        <div class="radio-wrap"><br>評価<br><br>      
                <label id="star" for="star1">
                <input type="radio" name="star" value="5" />
                <span class="text">最高☆☆☆☆☆</span>
                </label>
                <label id="star" for="star2">
                <input type="radio" name="star" value="4" />
                <span class="text">いい感じ☆☆☆☆</span>
                </label>
                <label id="star" for="star3">
                <input type="radio" name="star" value="3" />
                <span class="text">普通☆☆☆</span>
                </label>
                <label id="star" for="star4">
                <input type="radio" name="star" value="2" />
                <span class="text">悪い☆☆</span>
                </label>
                <label id="star" for="star5">
                <input type="radio" name="star" value="1" />
                <span class="text">最悪☆</span>
                </label>
            </div>
            <br>
        <div class="gazo">  
        あれば画像 <input type="file" name="img" id="img"/><br />
        </div>
        <span id="preview_area"></span><br>

        <input type="submit" value="送信">
    </form>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $('#img').on('change', function(){ 
        let strFileInfo = $('#img')[0].files[0]; 
        if(strFileInfo && strFileInfo.type.match('image.*')){ 
    
            $('#preview').remove(); 
            $('#preview_area').append('<img id="preview" width="200" />'); 
    
            fileReader = new FileReader();
            fileReader.onload = function(event){
            $('#preview').attr('src', event.target.result);
            }
    
            fileReader.readAsDataURL(strFileInfo);
        }
        });
    </script>    
</body>
</html>