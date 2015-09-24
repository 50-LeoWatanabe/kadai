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
$id = $_GET["id"];
$name ;
$adress;
$tel;
$time;
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM kyuukyuu WHERE id = " . $id;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($results);
foreach($results as $row) {
//	var_dump($row);
	$name = $row["name"];
	$adress = $row["adress"];
	$tel = $row["tel"];
    $time = $row["time"];
}
$pdo = null;
?>
<html>
<head>
</head>
<body>
<form action="update_execute.php" method="post">
    医療機関: <input type="text" name="name" value="<?php echo $name ?>" /><br>
    住所: <input type="text" name="adress" value="<?php echo $adress ?>" /><br>
    連絡先: <input type="text" name="tel" value="<?php echo $tel ?>" /><br>
    診察時間: <input type="text" name="time" value="<?php echo $time ?>" /><br>
	<input type="hidden" name="id" value="<?php echo $id ?>" />
    <br>
    <input type="radio" name="show_flg" value="1">記事の表示
    <br>
    <input type="radio" name="show_flg" value="2">非表示
    <br>
    <input type="hidden" name="id" value="<?php echo $id ?>" />
    <br>
    <input type="submit" value="更新" />
</form>
<form action="delete_execute.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id ?>" />
	<input type="submit" value="削除" />
</form>
</body>
</html>