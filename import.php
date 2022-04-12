<?php
include_once "config.php";
$excel = PHPExcel_IOFactory::load('users.xlsx');
$alldata = $excel->getActiveSheet()->toArray(true,true,true,true);
for($i=2; $i <= count($alldata); $i++){
  $name = $alldata[$i]['A'];
  $email = $alldata[$i]['B'];
  $conn->query("INSERT INTO users(name,email)
  VALUES ('$name','$email')");
}
?>
