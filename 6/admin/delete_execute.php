<?php
$news_id = $_POST["news_id"];

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "DELETE FROM news WHERE news_id = " . $news_id;
var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
var_dump($result);
if($result) {
	echo "データが削除できました";
	echo "<a href=index.php>一覧へ</a>";
} else {
	echo "データの削除に失敗しました";
}
$pdo = null;
?>
<html>
<head>
</head>
<body>
</body>
</html>