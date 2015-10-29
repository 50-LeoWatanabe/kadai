<?php include("header.php"); ?>
   
    <header class="header">
        <div class="inner clearfix">
            <h1 class="site-title">休日も子供を診察してくれる医療機関</h1>
        </div>
    </header>
    
    
    <section class="news contents-box">
        <h2 class="section-title text-center">
            <span class="section-title__yellow">News</span><span class="section-title-ja text-center">お知らせ・更新情報</span>
        </h2>
        <article class="news-detail">
            <dl class="clearfix">
               
               <?php
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT id, name, adress,tel,time, DATE_FORMAT(update_date ,'%y-%m-%d') AS update_date FROM kyuukyuu WHERE show_flg = 1 ORDER BY update_date DESC LIMIT 5";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
foreach($results as $row) {
//	var_dump($row);
    echo "更新日" . $row["update_date"] . "<br>";
	echo $row["name"] . "<br>";
    echo $row["adress"] . "<br>";
    echo $row["tel"] . "<br>";
    echo $row["time"] . "<br>";
    echo  "<br>";
}
$pdo = null;
?>

            <p class="view-detail text-right"><a href="admin/index.php">管理者画面</a></p>
        </article>
    </section>
   
  
<?php include("footer.php"); ?>


<?php
function myFunc($str){
    $new = htmlspecialchars($str,ENT_COMPAT,'utf-8') ;
        return $new;
}
        ?>
        
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            echo myFunc("<div>sss</div>");
        ?>
    </body>
    </html>