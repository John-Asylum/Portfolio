<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>John_Asylum</title>
	<link rel="stylesheet" href="../css/main.css" type="text/css">
</head>
<body>
	<div class="homepage-hero-module">
	    <div class="video-container">
	        <div class="filter"></div>
	        <video autoplay loop class="fillWidth">
	            <source src="../video/I_Just_Wanted.mp4" type="video/mp4" />
	        </video>
	    </div>
	</div>

	<div class="content">
		<div class="topic">
			<div class="leftsec">
				<hr>
				<hr>
				<hr>
				<hr>
				<hr>
			</div>
			<div class="textsec">
				<span>БЛОГ</span>
			</div>
			<div class="rigthsec">
				<hr>
				<hr>
				<hr>
				<hr>
				<hr>
			</div>
		</div>
		
	
				<?php
				include '../php/select.php';
				while ($r = mysql_fetch_array($select))
				{ echo "<div class='messages'>";
				echo "<h1> Заголовок статьи: </h1> <p>".$r['title'] ."</p>";
				echo "<p> Текст статьи: ".$r['text'] ."</p>";
				echo "<p> Дата: ".$r['date'] ." - ".$r['time'] ."</p>";
				echo "</div>";
				}

			?>
	</div>
	
</body>
<script type="text/javascript" src="../script/jqery.min.js" ></script>
<script type="text/javascript" src="../script/blog.js" ></script>
</html>