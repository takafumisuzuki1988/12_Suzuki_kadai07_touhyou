<!-- <html>
<head>
<title>CSVデータ表示</title>
<meta charset="utf-8">
</head>
<body>
 
<table>
<tr><th>id</th><th>名前</th><th>種類</th></tr>

</table>
</body>
</html> -->

<?php

// ファイルを開く
$f = fopen("data/table.csv","r");
echo $f;

while($line = fgetcsv($f)){
    var_dump($line);
}

//ファイル内容を1行ずつ読み込んで出力
// while ($str = fgets($file)){
//     echo nl2br($str);  //nl2brデータの数だけ繰り返すみたいなこと
// }

// ファイルを閉じる
fclose($f);


?>


