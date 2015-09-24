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
$name = $_POST["name"] ;
$aderess = $_POST["adress"] ;
$tel = $_POST["tel"] ;
$time = $_POST["time"] ;
$show_flg = $_POST["show_flg"] ;

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "UPDATE kyuukyuu set name = '" . $name . "', adress = '" . $adress . "', tel = '" . $tel . "', time = '" . $time . "', show_flg = '" . $show_flg . "', update_date = sysdate() " . "WHERE id = " . $id;
//var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
//var_dump($result);
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