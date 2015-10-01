<?php
/**
* FileUniqRenam
* ファイル名変更
* session_start();してる必要がある！
*/
function fileUniqRename($file_name){
  $extension = pathinfo($file_name, PATHINFO_EXTENSION); //拡張子取得
  $uniq_name = date("YmdHis").session_id() . "." . $extension; //ユニークファイル名作成
  return $uniq_name;
}

/**
*  view
*  XSS対策
*  @Param: $val(string)
*  @return: (string)
*/
function view($val){
  return htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
}


?>
