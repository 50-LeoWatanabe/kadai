<?php include("header.php"); ?>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
//$sql = "SELECT * FROM news ORDER BY create/date DESC";
// $sql = "SELECT name FROM enq";
// $sql = "SELECT name, email FROM enq";
// $sql = "SELECT * FROM enq where id = 1";
// $sql = "SELECT * FROM enq LIMIT 3";
$sql = "SELECT * FROM news ORDER BY update_date DESC LIMIT 5";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
$view = "";

// $view に表示する文字列を追記していく
$view .= "<table>";
foreach($results as $row) {
//    var_dump($row);
    $view .= "<tr>";
    $view .= "<td><a href=update.php?news_id=" . $row["news_id"] . ">" . $row["news_id"] . "</a></td>";
    $view .=  "<td><a href=update.php?news_id=" . $row["news_id"] . ">" . $row["news_title"] . "</a></td>";
    $view .= "</tr>";
}
// table閉じタグで終了
$view .= "</table>";

foreach($results as $row) {
    //	var_dump($row);
    echo "更新日時  ". $row["create_date"] . "<br>";
    echo "ニュースタイトル  ". $row["news_title"] . "<br>";
    echo "ニュース内容  ". $row["news_detail"] . "<br>";
    echo "記入者  ". $row["author"] . "<br>";
    echo "この記事を更新する  ". "<td><a href=update.php?news_id=" . $row["news_id"] . ">" . $row["news_id"] . "</a></td>";
    echo "<br>";
    echo "<br>";
}
$pdo = null;
?>
<html>
    <head>
    </head>
    <body>
        <hr>
        <a href="index.php">index.php</a> 
    </body>
</html>


<?php include("footer.php"); ?>