<?php
$name = $_POST["name"];
$adress = $_POST["adress"];
$tel = $_POST["tel"];
$time = $_POST["time"];
$show_flg = $_POST["show_flg"];

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "INSERT INTO kyuukyuu (id, name, adress, tel, time, show_flg, update_date) VALUES (NULL, '" . $name . "', '" . $adress . "', '" . $tel . "', '" . $time . "', '" . $show_flg . "', sysdate()) ";
//var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
//var_dump($result);
if($result) {
	echo "<br>データが登録できました<br>";
	echo "<a href=index.php>管理者メニューへ</a>";
} else {
	echo "データの登録に失敗しました";
}
$pdo = null;
?>
<html>
<head>
</head>
<body>
</body>
</html>