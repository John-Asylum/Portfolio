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
				<li><a href="../views/admin1.html">О себе</a></li>
				<li><a href="../views/admin2.html">Мои работы</a></li>
				<li><a href="../views/admin3.php">Блог</a></li>
			</ul>
		</nav>
		<h1 class="myclass1">Блог</h1>
		<nav class="widget">
				  <h1>Категории</h1>
				  <ul>
				    <li><a href="../views/admin3.php">add</a></li>
				    <li><a href="../views/blogedit.php">edit</a></li>
				    <li><a href="../views/blogdel.php">delete</a></li>
				  </ul>
				</nav>
		<div class="conteiner">


				<form method="post" action="admin3.php">
					<h1>Добавить статью </h1>
					<input type="text" name="title" class="textbox" placeholder="Введите заголовок"/>
					<textarea cols="40" rows="10" placeholder="Введите текст" name="text" class="message"></textarea><br>
					<input type="submit" class="button" name="add" value="Добавить">
				</form>
		</div>
		
		<footer class="site-footer">
			<div class="company">© 2018 JA. Все права защищены.</div>
		</footer>
<?php include '../php/add.php'; ?>
</body>
</html>