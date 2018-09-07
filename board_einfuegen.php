<html>
		<head>
		<title>SkateShop</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="PhPstyle.css">
	</head>
	<body>
		<li><a href=http://localhost/main.php>Main Page</a></li>
		<header>
			<h1>Fahrbare Untersätze</h1>
		</header>
		
	<form>
		<p>
			Bitte geben Sie die Informationen zu den Board an!
		</p>
		<p>
			Board Art: <input type="text" name="txt_BoardART">
		</p>
		<p>
			<button>Bestätigen</button>
		</p>
	</form>
	
	<?php
		if(isset($_POST['txt_BoardART'])){
			$BoardART = $_POST['txt_BoardART'];
			
			echo "<p>$BoardART</p>"; 
			
			$db=new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
			$db->query("INSERT INTO Board_ART (BoardART) VALUES ('$BoardART');");
			$db->close();
		}
	?>
	</body>
</html>
