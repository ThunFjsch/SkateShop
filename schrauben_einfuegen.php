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
		
	<form method="post">
		<p>
			Bitte geben Sie die Daten für die Schreiben an!
		</p>
		<p>
			Schrauben Typ: <input type="text" name="txt_SchraubenTYPEN">
		</p>
		<p>
			Schrauben Hersteller: <input type="text" name="txt_SchraubenHERSTELLER">
		</p>
		<p>
			Schrauben Preis: <input type="text" name="txt_SchraubenPREIS">
		</p>
		
		<p>
			<button>
				Bestätigen
			</button>
		</p>
	</form>
	
	<?php
		if(isset($_POST['txt_SchraubenTYPEN'])){
			$SchraubenTYPEN = $_POST['txt_SchraubenTYPEN'];
			$SchraubenHERSTELLER = $_POST['txt_SchraubenHERSTELLER'];
			$SchraubenPREIS = $_POST['txt_SchraubenPREIS'];
			
			echo "<p>$SchraubenTYPEN</p>";
			echo "<p>$SchraubenHERSTELLER</p>";
			echo "<p>$SchraubenPREIS</p>";
			
			$db=new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
			$db->query("INSERT INTO Schrauben (SchraubenTYPEN,SchraubenPREIS,SchraubenHERSTELLER) VALUES ('$SchraubenTYPEN','$SchraubenPREIS','$SchraubenHERSTELLER');");
			$db->close();
		}
	?>
	</body>
</html>
