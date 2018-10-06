<?php 
include '../php/connect.php';
$select= mysql_query("SELECT * FROM `john`.`blog` ORDER BY `id` DESC");

mysql_close($conect);
?>