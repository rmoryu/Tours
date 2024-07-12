<?php
//PDO sql 連線指令
// $db_host = "mysql:host=localhost;dbname=lincan;charset=utf8";
$db_host = "localhost";
$db_username = "tours";
$db_password = "1234";
$db_name = "tours";
//錯誤處理
try {
  //連線資料庫
  $db_link = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8", $db_username, $db_password);

  //設置 PDO 錯誤模式為異常
  // $db_link -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//   插入測試資料
//   $stmt = $db_link -> prepare("INSERT INTO feedback (name) VALUES (:data)");
//   $stmt -> bindParam(':data', $data);
//   $data = "測試用！";
//   $stmt -> execute();

//   echo "資料插入成功！";
}
catch (PDOException $e) {
  print "資料庫連結失敗，訊息：{$e->getMessage()}<br>";
  die();
}

?>