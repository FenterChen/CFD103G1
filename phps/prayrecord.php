<?php 
// 確認登入資料
try {
	require_once("connectBOBIO.php");
	//執行sql指令
  $alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
  $mem_no = $data["mem_no"];
	$sql ="select * from (prayer_record join offering on prayer_record.off_no =offering.off_no) join card on prayer_record.card_no =card.card_no where mem_no='$mem_no';";

  $member=$pdo->query($sql);
  $member->execute();

  if($member ->rowCount() == 0){
	echo "erro";
  exit();
  }else{
	$memRow = $member ->fetchAll(PDO::FETCH_ASSOC);
	echo(json_encode($memRow));
  }
} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>