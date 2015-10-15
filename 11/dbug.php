<?php
// ライブラリを読み込み
require("lib/dBug/dBug.php");
$url  = "data/sample2.json";
$json_data = file_get_contents($url, true);
$data = json_decode($json_data);
var_dump($data);
echo"<hr>";

// ライブラリを利用
new dBug($data);
?>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<span>ライブラリdBugの使い方</span>
<span><a href="index.php">index.php</a></span>
</body>
</html>