<?php 
// 確認登入資料
try {
	require_once("connectBOBIO.php");
	//執行sql指令
  $alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
  $mem_no=$data["mem_no"];
  $mem_name=$data["mem_name"];
  $phone=$data["phone"];
  $email=$data["email"];
  $sql="UPDATE member SET mem_name='$mem_name',mem_id='$email',phone='$phone',email='$email' WHERE mem_no='$mem_no';";
  $member=$pdo->query($sql);
  $member->execute();

	$memRow = $member ->fetchAll(PDO::FETCH_ASSOC);
	echo("會員資料已更新，請重新登入");

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>