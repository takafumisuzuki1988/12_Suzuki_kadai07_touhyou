<!DOCTYPE html>
<html>
<head>
<title>CSVデータ表示</title>
<meta charset="utf-8">
</head>
<body>
 
<table border='5'>
<tr><th>日時</th><th>名前</th><th>メール</th><th>お気に入り</th><th>評価</th><th>良かった点</th><th>悪かった点</th></tr>
 
<?php
$file_path = 'data/table.csv';

$fp  = fopen("$file_path","r");

while (($array = fgetcsv($fp)) !== FALSE) {
	
	//空行を取り除く
	if(!array_diff($array, array(''))){
		continue;
	}
	
	echo "<tr>";
	for($i = 0; $i < count($array); ++$i ){
		$elem = nl2br($array[$i]);
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