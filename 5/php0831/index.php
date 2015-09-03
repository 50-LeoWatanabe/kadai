<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<h1>アンケート</h1>
<form action="post_confirm.php" method="post">
	名前: <input type="text" name="name" />
	
    <br>
	年齢: <input type="text" name="age" />
    <br>
    email: <input type="email" name="email" />
    <br>
    <input type="radio" name="sex" value="1">男性
    <input type="radio" name="sex" value="2">女性
    <br>
    <input type="checkbox" name="hobby1" value="3">ボクシング
    <input type="checkbox" name="hobby2" value="4">漫画
    <input type="checkbox" name="hobby3" value="5">消防
    <br>
		<input type="submit" />
</form>
<ul>

<li><a href="read.php">入力したアンケートを確認</a></li>
</ul>

</body>
</html>