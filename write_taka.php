<?php
$name = $_POST['name'];
$mail = $_POST['mail'];

// 文字列作成（日付）
$time = date('Y-m-d H:i:s');

//登録文字列
$str = $time . '/' . $name . '/' .  $mail;

// .txt Fileにデータを保存する処理
// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $str . "\n");
fclose($file);

?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>