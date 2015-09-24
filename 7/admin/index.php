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
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<br>
<hi>管理者メニュー</hi>
<ul>
<li><a href="input.php">休日医療機関・新規追加</a></li>
    <li><a href="news_list.php">休日医療機関一覧（更新はここから）</a></li>
    <li><a href="search_ps.php">休日医療機関検索</a></li>
</ul>
    <p><a href="http://localhost/kadai/7/">メニューに戻る</a></p>
</body>
</html>