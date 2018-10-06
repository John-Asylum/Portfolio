<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка</title>
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	<header class="site-header">
		<h1 class="myclass">Панель Администрирования</h1>
		<nav class="header-menu">
			<ul>
				<li><a href="../index.html">Вернуться на сайт</a></li>
			</ul>
		</nav>
	</header>

		<nav class="mane-menu">
			<ul>
				<li><a href="admin1.html">О себе</a></li>
				<li><a href="admin2.html">Мои работы</a></li>
				<li><a href="admin3.php">Блог</a></li>
			</ul>
		</nav>
		<h1 class="myclass1">Блог</h1>
		<nav class="widget">
				  <h1>Категории</h1>
				  <ul>
				    <li><a href="admin3.php">add</a></li>
				    <li><a href="blogedit.php">edit</a></li>
				    <li><a href="blogdel.php">delete</a></li>
				  </ul>
				</nav>
		<div class="conteiner1">
			<div class="del1">
				<?php  include '../php/select.php';
					   include '../php/edit.php';
				while ($r = mysql_fetch_array($select)) {
					echo "<p> Заголовок статьи: ".$r['title'] ."</p>";
					echo "<p> Текст статьи: ".$r['text'] ."</p>";
					echo "<p> Дата: ".$r['date'] ." - ".$r['time'] ."</p>";
					echo "<td><a href=\"blogedit.php?id=".$r['id']."\">редактировать</a></td></br></br>";
				}
			?>
			</div>
				<form class="form1" method="post" action="blogedit.php">
					<h1>Добавить статью </h1>
					<input type="text" value="<?php $r['title'];?>" name="title" class="textbox1" placeholder="Введите заголовок"/>
					<textarea  placeholder="Введите текст" value="<?php echo $r['text']; ?>" name="text" class="message1"></textarea>
					<input type="submit" class="button1" name="edit" value="сохранить">
				</form>
		</div>
		
		<footer class="site-footer">
			<div class="company">© 2018 JA. Все права защищены.</div>
		</footer>
</body>
</html>