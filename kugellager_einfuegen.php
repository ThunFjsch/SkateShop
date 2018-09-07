<html>
	<body>
		<li><a href=http://localhost/main.php>Main Page</a></li>
	<form method="post">
		<p>
			Bitte geben Sie die Informationen ein!
		</p>
		<p>
			Kugellager Typ: <input type="text" name="txt_KugellagerTYP">
		</p>
		<p>
			Kugellager Preis: <input type="text" name="txt_KugellagerPREIS">
		</p>
		<p>
			Kugellager Hersteller: <input type="text" name="txt_KugellagerHERSTELLER">
		</p>
		<p>
			<button>Bestätigen</button>
		</p>
		</body>
	</form>
	
	<?php
		if(isset($_POST['txt_KugellagerTYP'])) {
			$KugellagerTYP = $_POST['txt_KugellagerTYP'];
			$KugellagerPREIS = $_POST['txt_KugellagerPREIS'];
			$KugellagerHERSTELLER = $_POST['txt_KugellagerHERSTELLER'];
			echo "<p>$KugellagerTYP</p>";
			echo "<p>$KugellagerPREIS</p>";
			echo "<p>$KugellagerHERSTELLER</p>";
			
			$db=new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
			$db->query("INSERT INTO Kugellagern (KugellagerTYP,KugellagerPREIS,KugellagerHERSTELLER) VALUES ('$KugellagerTYP','$KugellagerPREIS','$KugellagerHERSTELLER');");
			$db->close();
		}
	?>
</html>
