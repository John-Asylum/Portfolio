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
					   include '../php/del.php';
				while ($r = mysql_fetch_array($select)) {
					echo "<p> Заголовок статьи: ".$r['title'] ."</p>";
					echo "<p> Текст статьи: ".$r['text'] ."</p>";
					echo "<p> Дата: ".$r['date'] ." - ".$r['time'] ."</p>";
					echo "<td><a href=\"blogdel.php?id=".$r['id']."\">Удалить</a></td></br></br>";
				}
			?>
			</div>
		</div>
		
		<footer class="site-footer">
			<div class="company">© 2018 JA. Все права защищены.</div>
		</footer>
</body>
</html>