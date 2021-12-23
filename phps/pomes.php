<?php
try {
	require_once("connectPomes.php");
	$sql = "select  pomes_content,pomes_det from pomes";
	$pomes = $pdo->query($sql);
	$pomesRow = $pomes->fetchAll(PDO::FETCH_ASSOC);
	echo (json_encode($pomesRow));
} catch (PDOException $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
}
