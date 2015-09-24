<?php 
session_start(); 		// セッションを使うときは宣言
//var_dump($_SESSION) ;
if (isset($_SESSION["status"])) { 
    if($_SESSION["status"] == "OK"){
    } else {
        header("Location: login.php");
    }
} else { 
    header("Location: login.php");
}
?>

<?php
$id = $_POST["id"];

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "DELETE FROM kyuukyuu WHERE id = " . $id;
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