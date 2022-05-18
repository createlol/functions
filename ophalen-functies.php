<?php
require('function.php');

$host = 'localhost';
$dbname = 'dierenwinkel';
$pw = 'root';
$name = '';
$pdo = connection($host,$dbname,$pw,$name);


selectdata($pdo);

insertData($pdo);
 ?>
