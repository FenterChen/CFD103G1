<?php 
// 確認登入資料
try {
	require_once("connectBOBIO.php");
	//執行sql指令
  $alter = file_get_contents('php://input');
  $data = json_decode($alter, true);
  $mem_no = $data["mem_no"];
	$sql ="select * from ( orders join orders_list on orders.orders_no = orders_list.orders_no) where mem_no='$mem_no';";

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