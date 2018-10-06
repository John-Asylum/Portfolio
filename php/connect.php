<?php 
$conect = mysql_connect("localhost", "root", "");
$db = mysql_select_db("john", $conect);
mysql_query("SET NAMES 'utf8' ");
// if ($conect)
// 	echo "connected";
// else 
// 	echo "error connected";
// if ($db) {
// 	echo " true";
// }
// else 
// 	echo " false";
 ?>