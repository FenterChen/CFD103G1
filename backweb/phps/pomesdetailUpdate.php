<?php 
// 確認登入資料
try {
	require_once("connectBOBIO.php");
	//執行sql指令
  $alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
  $pomes_no=$data["pomes_no"];
  $pomes_det=$data["pomes_det"];
  $sql ="UPDATE pomes SET pomes_det='$pomes_det'  WHERE pomes_no='$pomes_no'; ";    
  $amulet_type = $pdo->query($sql);
  $amulet_type->execute();
  
  echo ("圖片已更新，謝謝。");

} catch (PDOException $e) {
  echo "錯誤行號 : ", $e->getLine(), "<br>";
  echo "錯誤原因 : ", $e->getMessage(), "<br>";
  // echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>














