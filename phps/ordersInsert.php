<?php 
try {
	require_once("connectBOBIO.php"); //連線資料庫
	$alter = file_get_contents('php://input'); //找到Vue那邊的資料
  	$data = json_decode($alter, true); //轉成JSON檔案
	//執行sql指令

	$orderNum = time();


	$sql = 
	"INSERT INTO `orders`(`orders_no`, `mem_no`, `recipient`, `orders_phone`, `orders_email`, `orders_add`, `delivery`, `orders_date`, `orders_total`, `order_status`) 
	VALUES ($orderNum,'$data[mem_no]','$data[recipient]','$data[orders_phone]','$data[orders_email]','$data[orders_add]','宅配','$data[orders_date]','399','0')";
	
	$member = $pdo->query($sql);  //準備sqL指令


	$sql1 =  "INSERT INTO `orders_list`(`orders_no`, `type_no`, `zodiac_no`, `word`, `amulet_amount`, `price`) VALUES ($orderNum ,'$data[type_no]', '$data[zodiac_no]', '$data[word]','$data[amulet_amount]', '399')
	";

	$member = $pdo->query($sql1);  //準備sqL指令

	if(!$member){
		die($pdo->error);
	}

} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}
 ?>