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
			Bitte geben Sie die Informationen zu den Rädern an!
		</p>
		<p>
			Räder Material: <input type="text" name="txt_RaederMATERIAL">
		</p>
		<p>
			Räder Hersteller: <input type="text" name="txt_RaederHERSTELLER">
		</p>
		<p>
			Räder Preis: <input type="text" name="txt_RaederPREIS">
		</p>
		<p>
			<button>Bestätigen</button>
		</p>
	</form>
	
	<?php
		if(isset($_POST['txt_RaederMATERIAL'])){
			$RaederMATERIAL = $_POST['txt_RaederMATERIAL'];
			$RaederHERSTELLER = $_POST['txt_RaederHERSTELLER'];
			$RaederPREIS = $_POST['txt_RaederPREIS'];
			
			echo "<p>$RaederMATERIAL</p>";
			echo "<p>$RaederHERSTELLER</p>";
			echo "<p>$RaederPREIS</p>";
			
			$db=new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
			$db->query("INSERT INTO Raeder (RaederMATERIAL,RaederPREIS,RaederHERSTELLER) VALUES ('$RaederMATERIAL','$RaederPREIS','$RaederHERSTELLER');");
			$db->close();
		}
	?>
	</body>
</html>
