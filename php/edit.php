<?php 
include '../php/connect.php';

if(isset($r['edit'])){

	$title = strip_tags(trim($r['title']));
	$text = strip_tags(trim($r['text']));
	mysql_query("UPDATE `blog` SET title='$title', text='$text' WHERE id ='$id'");
}

mysql_close($conect);


?>