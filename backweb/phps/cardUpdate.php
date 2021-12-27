<?php 
try {
	require_once("connectBOBIO.php");
	//執行sql指令
  $alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
  $card_no=$data["card_no"];
  $card_cont=$data["card_cont"];
  $sql="UPDATE card SET card_cont='$card_cont' WHERE card_no='$card_no';";
  $card=$pdo->query($sql);
  $card->execute();
	echo("圖片已更新");

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>