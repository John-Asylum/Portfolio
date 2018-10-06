<?php 
include '../php/connect.php';

$id = $_GET['id'];

mysql_query("DELETE FROM `blog` WHERE id ='$id'");

mysql_close($conect);


?>