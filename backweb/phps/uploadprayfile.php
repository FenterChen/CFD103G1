<?php

$from=$_FILES["file"]["tmp_name"];
$to="$dir/" .$_FILES["file"]["name"];
switch($_FILES["file"]["error"]){
  case UPLOAD_ERR_OK :
  $dir ="../img/pray";
  if(file_exists($dir) == false){
    mkdir($dir);
  }
  if(copy($from,$to)==true){
    echo "上傳成功";
  }else{
    echo "上傳失敗~";
  }
  break;
}


?>