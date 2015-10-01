<?php
 //**********************************************************
 // *  fileupload2.php
 // *  FileList（画像ファイル一覧表示）
 //**********************************************************
$img_path = "upload";
$directry = new RecursiveDirectoryIterator($img_path); //走査するディレクトリを指定
$data_obj = new RecursiveIteratorIterator($directry);  //指定したディレクトリから反復処理でデータを取得

//画像を繰返し取得表示
$list = "";
foreach ($data_obj as $filepath) { // $data_obj から $filepathにてデータを取得
    if ($filepath->isFile()) {
        $list .=  '<img src="'.$filepath->getPathname().'">';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>写真アップロード</title>
<style>
#photarea{padding:5%;width:100%;background:black;}
img{height:200px;}
</style>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="main">


<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="#">写真アップロード</a></div>
      <ul class="pager">
      <li class="previous"><a href="index.php">カメラ／写真選択</a></li>
      <li class="next disabled"><a href="view.php">画像一覧 →</a></li>
      </ul>
  </nav>
</header>
<!-- Head[End] -->


<!-- IMG_LIST[Start] -->
 <div class="container-fluid">

 <p><input id="img_width_range" type="range" step="10" max="400" min="50" value="200"></p>
  <div class="jumbotron"><span id="heigth_txt">200px</span>
    <div id="photarea"><?=$list?></div>
  </div>
</div>
<!-- IMG_LIST[END] -->



<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

$("#img_width_range").on("change",function(){
  $("img").css("height", $(this).val()+"px");
  $("#heigth_txt").text($(this).val()+"px");
});
</script>
</body>
</html>



