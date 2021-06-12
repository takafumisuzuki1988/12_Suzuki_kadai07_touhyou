<html>
<head>
	<meta charset="utf-8">
	<title>サンプルフォーム</title>
</head>

<body>

	<form action="write_taka.php" method="post">
		お名前: <input type="text" name="name">
		EMAIL: <input type="text" name="mail"><br>
		評価： 5<input type="checkbox" name="review" value="5"> 4<input type="checkbox" name="review" value="4">3<input type="checkbox" name="review" value="3">
		2<input type="checkbox" name="review" value="2">1<input type="checkbox" name="review" value="1"><br>
		コメント: <input type="text" name="comment"><br>
		<input type="submit" value="送信">
	</form>

</body>
</html>