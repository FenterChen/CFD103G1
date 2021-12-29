<?php 
// 確認登入資料
try {
	require_once("connectBOBIO.php");
	//執行sql指令
  $alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
  // $type_img=$data["amuletTypeImg"];
  $type_text=$data["amuletTypeText"];
  $type_no=$data["typeNo"];
  $sql ="UPDATE amulet_type SET type_text='$type_text'  WHERE type_no='$type_no'; ";    
  $amulet_type = $pdo->query($sql);
  $amulet_type->execute();
  
  // $sqlImg ="UPDATE amulet_type SET type_img='$type_img' WHERE type_no='$type_no'; ";
  // $sqlImg = $pdo->query($sqlImg);
  // $sqlImg->execute();

  echo ("資料已更新，謝謝。");

} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤原因 : ", $e->getMessage(), "<br>";
  // echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>














