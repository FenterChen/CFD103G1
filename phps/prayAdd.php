<?php 
try {
	require_once("connectBOBIO.php");
	//執行sql指令
	$alter = file_get_contents('php://input');
 $data = json_decode($alter, true);
	$sql = "INSERT INTO prayer_record (mem_no, off_no, card_no,pray_date) 
	VALUES ('$data[mem_no]','$data[off_no]','$data[card_no]','$data[pray_date]')";
	$member = $pdo->prepare($sql);
	$member->execute();
	echo "成功~";

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>