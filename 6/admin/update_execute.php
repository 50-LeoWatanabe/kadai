<?php
$news_id = $_POST["news_id"];
$news_title = $_POST["news_title"] ;
$news_detail = $_POST["news_detail"] ;
$author = $_POST["author"] ;
$show_flg = $_POST["show_flg"] ;

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "UPDATE news set news_title = '" . $news_title . "', news_detail = '" . $news_detail . "', author = '" . $author . "', show_flg = '" . $show_flg . "', update_date = sysdate() " . "WHERE news_id = " . $news_id;
var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
var_dump($result);
if($result) {
	echo "データが更新できました";
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