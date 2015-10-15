<?php
require("config.php");
$url  = "http://api.gnavi.co.jp/RestSearchAPI/20150630/?keyid=" . $key_id . "&format=json";
$json_data = file_get_contents($url, true);
$data = json_decode($json_data);
// var_dump($data);
//var_dump($data->rest[0]);
echo "<hr>";
echo $data->rest[0]->name . "<br>";
echo $data->rest[1]->name . "<br>";
echo $data->rest[2]->name . "<br>";
?>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<span><a href="index.php">index.php</a></span>
</body>