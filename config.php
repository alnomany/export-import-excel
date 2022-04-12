<?php

$servername='localhost';
$username='serp-api';
$password='serp-api';
$dbname='serp-api';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
include_once "php-export-data.class.php";
include_once "excel/PHPExcel/IOFactory.php";
?>
