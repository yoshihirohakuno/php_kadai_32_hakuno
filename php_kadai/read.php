<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>データ登録</title>
</head>
<body>
    
<table>
<tr>
    <th>日付</th>
    <th>名前</th>
    <th>タイトル</th>
    <th>説明文</th>
    <th>星の数</th>
    <th>画像</th>
</tr>

<?php
// ファイルを開く
$file = fopen('./data/data.txt','r');
// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    //第1=ターゲット⽂字, 第2=元の⽂字列
    $array = explode("," , $str);
    echo '<tr>';
    echo '<td>'.$array[0].'</td>';
    echo '<td>'.$array[1].'</td>';
    echo '<td>'.$array[2].'</td>';
    echo '<td>'.$array[3].'</td>';
    echo '<td>'.$array[4].'</td>';
    echo '<td><img width="100"  src="./upload/'.$array[5].'"></td>';
    echo '</tr>';
}

// ファイルを閉じる
fclose($file);

?>
</table>

    <ul>
        <li><a href="post.php">戻る</a></li>
    </ul>

</body>
</html>