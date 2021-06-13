<html>
<head>
	<meta charset="utf-8">
	<title>サンプルフォーム</title>
	<link rel="stylesheet" href="css/tk1.css">
</head>

<body>
	<p id="title">ご利用ありがとうございました！<br>レビューをご入力お願いします！</p>

	<div id="input_form">
	<form action="write_taka.php" method="post">
		<div class="table">
			<p>お気に入り登録*：</p><input type="radio" name="like" value="Y">する／<input type="radio" name="like" value="N">しない
		</div>
		<div class="table">
			<p>あなたのお名前*:</p><input type="text" name="name"><br>
		</div>
		<div class="table">
			<p>EMAIL*:</p><input type="text" name="mail"><br>
		</div>
		<div class="table">
		<p>今回の先生の評価*：</p>
		5<input type="radio" name="review" value="5"> 
		/4<input type="radio" name="review" value="4">
		/3<input type="radio" name="review" value="3">
		/2<input type="radio" name="review" value="2">
		/1<input type="radio" name="review" value="1"><br>
		</div>
		<div class="table">
		<p>コメント: </p><input type="textarea" name="comment" id="comment_free"><br>
		</div>
		<div id="send_btn">
			<input type="submit" value="送信">
		</div>
	</form>
	</div>
</body>
</html>