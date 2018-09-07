<html>
	
		<head>
		<title>SkateShop</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="PhPstyle.css">		
	</head>
	<body>
	<li><a href=http://localhost/main.php>Main Page</a></li>
	<form method="post">
		<p>
			Bitte geben Sie die Informationen ein!
		</p>
		<p>
			Achse Typ: <input type="text" name="txt_AchseTYP">
		</p>
		<p>
			Achse Preis: <input type="text" name="txt_AchsePREIS">
		</p>
		<p>
			Achse Hersteller: <input type="text" name="txt_AchseHERSTELLER">
		</p>
		<p>
			<button>Bestätigen</button>
		</p>
	</form>
	
	<?php
		if(isset($_POST['txt_AchseTYP'])) {
			$AchseTYP = $_POST['txt_AchseTYP'];
			$AchsePREIS = $_POST['txt_AchsePREIS'];
			$AchseHERSTELLER = $_POST['txt_AchseHERSTELLER'];
			echo "<p>$AchseTYP</p>";
			echo "<p>$AchsePREIS</p>";
			echo "<p>$AchseHERSTELLER</p>";
			
			$db=new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
			$db->query("INSERT INTO Achsen (AchseTYP,AchsePREIS,AchseHERSTELLER) VALUES ('$AchseTYP','$AchsePREIS','$AchseHERSTELLER');");
			$db->close();
		}
	?>
	</body>
</html>
