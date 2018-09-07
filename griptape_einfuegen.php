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
			Griptape Typ: <input type="text" name="txt_GriptapeTYP">
		</p>
		<p>
			Griptape Preis: <input type="text" name="txt_GriptapePREIS">
		</p>
		<p>
			Griptape Hersteller: <input type="text" name="txt_GriptapeHERSTELLER">
		</p>
		<p>
			<button>Bestätigen</button>
		</p>
	</form>
	
	<?php
		if(isset($_POST['txt_GriptapeTYP'])) {
			$GriptapeTYP = $_POST['txt_GriptapeTYP'];
			$GriptapePREIS = $_POST['txt_GriptapePREIS'];
			$GriptapeHERSTELLER = $_POST['txt_GriptapeHERSTELLER'];
			echo "<p>$GriptapeTYP</p>";
			echo "<p>$GriptapePREIS</p>";
			echo "<p>$GriptapeHERSTELLER</p>";
			
			$db=new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
			$db->query("INSERT INTO Griptapen (GriptapeTYP,GriptapePREIS,GriptapeHERSTELLER) VALUES ('$GriptapeTYP','$GriptapePREIS','$GriptapeHERSTELLER');");
			$db->close();
		}
	?>
	</body>
</html>
