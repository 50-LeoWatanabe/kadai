<html>
<head>
</head>
<body>
<form action="input_execute.php" method="post">
	ニュース題名: <input type="text" name="news_title" value="" />
    <br>
    ニュース内容: <input type="text" name="news_detail" value="" />
    <br>
    記入者: <input type="text" name="author" value="" />
    <br>
    <input type="radio" name="show_flg" value="1">記事の表示
    <br>
    <input type="radio" name="show_flg" value="2">非表示
    <br>
	<input type="submit" />
</form>
</body>
</html>