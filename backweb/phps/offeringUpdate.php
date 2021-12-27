<?php 
try {
	require_once("connectBOBIO.php");
	//執行sql指令
  $alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
  $offer=$data["supply"];
  $num = count($offer); 
  for($x = 0; $x < $num; $x++){
  $offerarr=$offer[$x];
  $offer_no=$offerarr["off_no"];
  $offer_name=$offerarr["off_name"];
  $offer_cont=$offerarr["off_cont"];

  $sql="UPDATE offering SET off_name='$offer_name',off_cont='$offer_cont' WHERE off_no='$offer_no';";
  $off=$pdo->query($sql);
  $off->execute();
  }

	echo("內容已更新");

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>