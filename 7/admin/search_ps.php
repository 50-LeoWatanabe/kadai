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
</head>
<body>
<!-- 検索する時は、情報が欲しいのでGET -->
<form action="search_ps_execute.php" method="get">
	検索したいID: <input type="text" name="id" value="" />
	<input type="submit" />
</form>
</body>
</html>