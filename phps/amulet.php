<?php 
// 確認登入資料
try {
	require_once("connectBOBIO.php");
	//執行sql指令

	$sql = "select * from amulet_type";
	$amulet_type = $pdo->query($sql);
	$amuletRow = $amulet_type ->fetchAll(PDO::FETCH_ASSOC);
	echo (json_encode($amuletRow));
} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	// echo "系統暫時不能正常運行，請稍後再試<br>";	
}

// 1.連線php
// 2.接收前端input 內的values
// 3.轉型json檔案
// 4.執行sql指令>> select
// 5.命名 -> pdo物件
// 6.執行

// echo 成功訊息 反之
// echo 錯誤訊息  第幾行,原因 
 ?>










