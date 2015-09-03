<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
書き込みを行いました
    <ul>
        <li><a href="index.php">アンケートに戻る</a></li>
    </ul>
</body>
<?php
$file = fopen("data/data.csv","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fputs($file, "Tname" ."age"."email"."sex"."hobby1"."hobby2"."hobby3". PHP_EOL);
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>