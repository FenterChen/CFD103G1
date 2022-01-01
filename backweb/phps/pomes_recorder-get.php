<?php 
try {
	require_once("connectBOBIO.php");

	$sql = "select * from pomes_record";
  	$admin=$pdo->query($sql);
  	$adminRow = $admin->fetchAll(PDO::FETCH_ASSOC);
	echo(json_encode($adminRow));

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>