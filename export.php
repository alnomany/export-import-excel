<?php
include_once "config.php";
$excel = new ExportDataExcel('browser','news_db.xls');
$excel->initialize();
$get_data = $conn->query('SELECT * FROM newspapers');
foreach($get_data as $row){
  $arr = array($row['id'],$row['title']);
  $excel->addRow($arr);
}
$excel->finalize();

?>
