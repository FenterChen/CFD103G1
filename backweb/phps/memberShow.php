
<?php 
try {
	require_once("connectBOBIO.php");
	//執行sql指令
	$sql = "select * from member";
  $member=$pdo->query($sql);
  $prodRows = $member->fetchAll(PDO::FETCH_ASSOC);
	echo(json_encode($prodRows));

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>