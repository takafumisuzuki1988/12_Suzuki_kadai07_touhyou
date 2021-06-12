<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$review = $_POST['review'];
$comment = $_POST['comment'];

// // 文字列作成（日付）
// $time = date('Y-m-d H:i:s');

// //登録文字列
// $str = array($time, $name,$mail);

// // .txt Fileにデータを保存する処理
// // ファイルに書き込み
// $fp = fopen('data/table.csv', 'w');
// foreach($str as $data){
//     $line = implode(',',$data);
//     fwrite($fp, $line . "\n")
// }
// fclose($fp);
// function h($value){
//     return htmlspecialchars($value, ENT_QUOTES);
// }

$data = array(	
		array(1,$name,$mail,$review,$comment),
		);
 
$fp = fopen('data/table.csv', 'a'); 
foreach($data as $line){ 
	fputcsv($fp, $line);
}
fclose($fp);
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
    <li><a href="../12_Suzuki_kadai07_touhyou/">戻る</a></li>
</ul>

</body>
</html>