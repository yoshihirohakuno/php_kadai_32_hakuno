<?php
// timeを東京にする
date_default_timezone_set('Asia/Tokyo');

$time = date("Y-m-d H:i:s");
$name =$_POST['name'];
$title =$_POST['title'];
$discription =$_POST['discription'];
$star = $_POST['star'];
$img_name =$_FILES['img']['name'];

// valの値に対して暗号化
function h($val){
    return htmlspecialchars($val, ENT_QUOTES);
}

// ファイルを開く
$file = fopen('./data/data.txt', 'a');

// ファイルに書き込み
fwrite($file, h($time).","); // \nで改行。これはシングルクォーテーションでは動かない
fwrite($file, h($name).","); 
fwrite($file, h($title).",");
fwrite($file, h($discription).",");
fwrite($file, h($star).",");
fwrite($file, h($img_name)."\n");

//画像を保存
move_uploaded_file($_FILES['img']['tmp_name'], './upload/' . $img_name);

// ファイルを閉じる
fclose($file);


?>

<html>

<head>
    <meta charset="utf-8">
    <title>データ登録</title>
</head>

<body>

    <h1>ご協力ありがとうございました！</h1>
    <ul>
        <li><a href="post.php">戻る</a></li>
        <li><a href="read.php">結果</a></li>
    </ul>


</body>
</html>