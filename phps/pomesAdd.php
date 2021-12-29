<?php
try {
	require_once("connectBOBIO.php");
	//執行sql指令
	$alter = file_get_contents('php://input');
	$data = json_decode($alter, true);
	$sql = "INSERT INTO pomes_record (pomes_no, mem_no, pomes_date) 
	VALUES ('$data[pomes_no]','$data[mem_no]','$data[pomes_date]');";
	$pomes_record = $pdo->prepare($sql);
	$pomes_record->execute();
	echo "異動成功~";
} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
?>