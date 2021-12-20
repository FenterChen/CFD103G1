<?php 
// 確認登入資料
try {
	require_once("connectBOBIO.php");
	//執行sql指令
  $alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
  $mem_no =  $data["mem_no"];
  $memPsw = $data["memPsw"];
  $confirmPsw = $data["confirmPsw"];
	$confirm ="select * from member where mem_no='$mem_no' and mem_psw='$memPsw';";
  $confirm=$pdo->query($confirm);
  $confirm->execute();

  if($confirm ->rowCount() == 0){
	echo "請確認密碼";
  exit();
  }else{
	$sql ="UPDATE member SET mem_psw='$confirmPsw' WHERE mem_no='$mem_no';";
  $member=$pdo->query($sql);
  $member->execute();
	$memRow = $member ->fetchAll(PDO::FETCH_ASSOC);
	echo"密碼更改成功!";
  }

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>