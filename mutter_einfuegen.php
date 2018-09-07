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
			Mutter Typ: <input type="text" name="txt_MutterTYP">
		</p>
		<p>
			Mutter Preis: <input type="text" name="txt_MutterPREIS">
		</p>
		<p>
			Mutter Hersteller: <input type="text" name="txt_MutterHERSTELLER">
		</p>
		<p>
			<button>Bestätigen</button>
		</p>
	</form>
	
	<?php
		if(isset($_POST['txt_MutterTYP'])) {
			$MutterTYP = $_POST['txt_MutterTYP'];
			$MutterPREIS = $_POST['txt_MutterPREIS'];
			$MutterHERSTELLER = $_POST['txt_MutterHERSTELLER'];
			echo "<p>$MutterTYP</p>";
			echo "<p>$MutterPREIS</p>";
			echo "<p>$MutterHERSTELLER</p>";
			
			$db=new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
			$db->query("INSERT INTO Muttern (MutterTYP,MutterPREIS,MutterHERSTELLER) VALUES ('$MutterTYP','$MutterPREIS','$MutterHERSTELLER');");
			$db->close();
		}
	?>
	</body>
</html>
