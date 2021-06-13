<?php

// ファイルを開く
$fp = fopen("./data/table.csv","r");

echo '<table border="1">
    <tr>
    <th>日時</th>
    <th>名前</th>
    <th>メール</th>
    <th>お気に入り</th>
    <th>評価</th>
    <th>良かった点</th>
    <th>悪かった点</th>
    </tr>';

while($data = fgetcsv($fp)){

echo '<tr>';
for($i = 0; $i < count($data); $i++){
    echo '<td>'.$data[$i].'</td>';
}
echo '</tr>';
}

echo '</table>';

// ファイルを閉じる
fclose($fp);

?>


