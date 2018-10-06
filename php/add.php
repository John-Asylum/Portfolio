<?php 
include '../php/connect.php';
if (isset($_POST['add'])){
	$title = strip_tags(trim($_POST['title']));
	$text = strip_tags(trim($_POST['text']));
	$date = date('Y-m-d');
	$time = date('H:i:s');
	if ($title and $text){
		mysql_query("
			INSERT INTO blog(title, text, date, time) 
			VALUES ('$title', '$text', '$date', '$time')
		");
	}
}
mysql_close($conect);
?>