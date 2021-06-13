<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$like = $_POST['like'];
$review = $_POST['review'];
$comment_g = $_POST['comment_g'];
$comment_b = $_POST['comment_b'];


// 文字列作成（日付）
$time = date('y-m-d H:i');

$data = array(	
		array($time,$name,$mail,$like,$review,$comment_g,$comment_b),
		);

//ファイルを開く
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

<ul>
    <li><a href="../12_Suzuki_kadai07_touhyou/">戻る</a></li>
</ul>

</body>
</html>