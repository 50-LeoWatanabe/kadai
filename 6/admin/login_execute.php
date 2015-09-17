<?php
$name = $_POST["name"];
$password = $_POST["password"];


if($name == "admin" and $password == "password") {
    echo "ログイン完了";
    echo "<a href=index.php>管理者メニューへ</a><br>";
    session_start();
    $_SESSION["status"] = "OK";
    var_dump($_SESSION);
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