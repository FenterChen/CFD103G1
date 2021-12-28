<?php 
try {
	require_once("connectBOBIO.php");
	$alter = file_get_contents('php://input');
	$data = json_decode($alter, true);
	$sql = "select * from donate";
  	$money=$pdo->query($sql);
  	$moneyRows = $money->fetchAll(PDO::FETCH_ASSOC);
	echo(json_encode($moneyRows));

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>