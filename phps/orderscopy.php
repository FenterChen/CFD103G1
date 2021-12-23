<?php
//1-使用變數POST叫出的資料 -正常寫法html 

try{
  require_once("connectorders.php"); //1-連線資料庫
  
  $sql = "select * from orders "; //2-選擇SQL的資料
  $orders = $pdo->query($sql);  //3-查詢準備SQl的變數
  $OrdersRows = $orders->fetchAll(PDO::FETCH_ASSOC); //4-抓取全部資料
  echo (json_encode($OrdersRows)); //5-轉型json前端要用vue匯出資料
  

// }catch(PDOException $e){
//   echo $e->getMessage(); //固定使用
// }

}catch(Exception $e){
  echo "錯誤行號 :" , $e->getLine();
  echo "錯誤原因 :" , $e->getMessage();
}

?>