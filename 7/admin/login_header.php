<?php
session_start();
//postでname,passwordを取得する
var_dump($_POST);
$name = $_POST["name"];
$password = $_POST["password"];

//nameがadminか
//adminでなければ、login.phpにリダイレクト
if("admin" != $name){
header("Location:login.php?error=1");
exit;
}
//passwordがpasswordか
//passwordでなければ、login.phpにリダイレクト
if("password" != $password){
//    echo"passwordが違います";
header("Location:login.php?error=2");
exit;
}
//ここまでくれば正しいので、セッション発行
//セッションのSTATUSキーにOKをセット
$_SESSION["status"] = "OK";
var_dump($_SESSION);
//index.phpにリダイレクト
header("Location:index.php");
//$name = $_POST["name"];
//$password = $_POST["password"];
//
//
//if($name == "admin" and $password == "password") {
//    echo "ログイン完了";
//    echo "<a href=index.php>管理者メニューへ</a><br>";
//    session_start();
//    $_SESSION["status"] = "OK";
//    var_dump($_SESSION);
//} else {
//    echo "データの登録に失敗しました";
//}
//$pdo = null;
?>