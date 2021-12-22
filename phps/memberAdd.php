<?php 
try {
	require_once("connectMoney.php");
	//執行sql指令
	$alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
	$sql = "INSERT INTO member (mem_name, mem_id, mem_psw,phone,email,mem_date,mem_status) 
	VALUES ('$data[mem_name]','$data[mem_id]','$data[mem_psw]','$data[phone]','$data[email]','$data[mem_date]','$data[mem_status]')";
	$member = $pdo->prepare($sql);
	$member->execute();
	echo "異動成功~";

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>