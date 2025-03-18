<?php 
// エラー表示を有効化
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$thread_array = array();

//コメントデータをテーブルから取得してくる
$sql = "SELECT * FROM thread";
$statement = $pdo->prepare($sql);
$statement->execute();
$thread_array = $statement;

?>


