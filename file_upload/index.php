<?php
 //**********************************************************
 // *  fileupload.php
 // *  FileUpLoad
 //**********************************************************
//最初に受け取るパラーメータや使用する変数を記述しておきましょう。
session_start();

include("include/func.php");
$img = '';

//FileUpload処理
if (!isset($_FILES['upfile']['error']) || !is_int($_FILES['upfile']['error']) ||     !isset($_POST["file_upload_flg"]) || $_POST["file_upload_flg"]!="1") {
  //echo 'パラメータが不正です';
  if( isset($_GET["img"]) ) {
    $img = '<img src="upload/'.urldecode($_GET["img"]).'" >';
  }

}else{
  $tmp_path  = $_FILES["upfile"]["tmp_name"]; //"/usr/www/tmp/1.jpg"アップロード先のTempフォルダ

  //File名の変更※
  $file_name = $_FILES["upfile"]["name"]; //"1.jpg"ファイル名取得
  $extension = pathinfo($file_name, PATHINFO_EXTENSION); //拡張子取得
  $uniq_name = date("YmdHis").session_id() . "." . $extension;  //ユニークファイル名作成
 //$uniq_name = fileUniqRename($_FILES["upfile"]["name"]);    //func.phpに関数を用意！

  // FileUpload [--Start--]
  if ( is_uploaded_file( $tmp_path ) ) {
    if ( move_uploaded_file( $tmp_path, "upload/".$uniq_name ) ) {
         chmod( "upload/".$uniq_name, 0644 );
         $fview =  $uniq_name."をアップロードしました。";
         header( "Location: index.php?img=".urlencode($uniq_name) );
         exit;
    } else {
        $fview = "";
        echo "Error:アップロードできませんでした。";
    }

  }
  // FileUpload [--End--]

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
fieldset{border:1px solid #666;padding:3px;}
#photarea{padding:5%;width:90%;background:black;}
img{width:100%}
#upload_btn{display:none;}
</style>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="#">写真アップロード</a></div>
      <ul class="pager">
      <li class="previous disabled"><a href="index.php">カメラ／写真選択</a></li>
      <li class="next"><a href="view.php">画像一覧 →</a></li>
      </ul>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="container-fluid">
  <div class="jumbotron">
    <h1>カメラ・写真アップロード</h1>
    <p>カメラ（スマートフォンのみ）・写真の選択をおこないファイルをアップロードします！</p>

    <p><a href="#" id="select_btn" class="btn btn-primary btn-lg">カメラ/写真選択</a></p>
    <p><a href="#" id="upload_btn" class="btn btn-success btn-lg">Fileアップロード</a></p>
    <form method="post" action="index.php" enctype="multipart/form-data" id="send_file">
        <input type="file" accept="image/*" capture="camera" id="image_file" value="" name="upfile" style="opacity:0;">
        <input type="hidden" id="lat" name="lat">
        <input type="hidden" id="lon" name="lon">
        <input type="hidden" name="file_upload_flg" value="1">
    </form>
  </div>
  <div id="fileapi"><img id="image_view"></div>
  <div id="photarea"><?=$img?></div>
</div>
<!-- Main[End] -->


<!-- Javascript -->
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
//非表示のinput type="file"をクリック
$("#select_btn").on("click", function(){
   $("#image_file").trigger("click");
});

//File選択したら”Fileアップロード”ボタンを表示
$("#image_file").on("change",function(){
  //★ Point ：FileSize取得

  //Uploadボタン表示
  $("#upload_btn").show();
});

//アップロードボタン ”Submit”で送信
$("#upload_btn").on("click", function(){
   $("#send_file").submit();
});
</script>
</body>
</html>
