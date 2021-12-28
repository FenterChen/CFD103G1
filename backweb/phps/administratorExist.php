<?php 
// 確認登入資料
try {
	require_once("connectBOBIO.php");
	//執行sql指令
  $alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
  $admin_name = $data["admin_name"];
  $admin_psw =  $data["admin_psw"];
	$sql ="select * from administrater where admin_name='$admin_name' and admin_psw='$admin_psw';";
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