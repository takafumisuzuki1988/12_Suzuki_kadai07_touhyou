<!DOCTYPE html>
<html>
<head>
<title>CSVデータ表示</title>
<meta charset="utf-8">
</head>
<body>
 
<table border='1'>
<tr><th>id</th><th>名前</th><th>メール</th><th>評価</th><th>コメント</th></tr>
 
<?php
$file_path = 'data/table.csv';
$utf_file = 'data/table_utf.csv';

//文字化け対策としてSJISのデータをUTF-8に変換して保存
// file_put_contents($utf_file, mb_convert_encoding(file_get_contents($file_path),'UTF-8','SJIS-WIN'));

if( ($fp = fopen("$utf_file","r"))=== false ){
	die("CSVファイル読み込みエラー");
}
 
while (($array = fgetcsv($fp)) !== FALSE) {
	
	//空行を取り除く
	if(!array_diff($array, array(''))){
		continue;
	}
	
	echo "<tr>";
	for($i = 0; $i < count($array); ++$i ){
		$elem = nl2br(mb_convert_encoding($array[$i], 'UTF-8', 'SJIS-WIN'));
		$elem = $elem === "" ?  "&nbsp;" : $elem;
		echo("<td>".$elem."</td>");
	}
	echo "</tr>";
	
}
 
fclose($fp);
?>
 
</table>
 
</body>
</html>