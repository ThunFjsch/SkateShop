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
			Brett Typ: <input type="text" name="txt_BrettTYP">
		</p>
		<p>
			Brett Preis: <input type="text" name="txt_BrettPREIS">
		</p>
		<p>
			Brett Hersteller: <input type="text" name="txt_BrettHERSTELLER">
		</p>
		<p>
			<button>Bestätigen</button>
		</p>
	</form>
	
	<?php
		if(isset($_POST['txt_BrettTYP'])) {
			$BrettTYP = $_POST['txt_BrettTYP'];
			$BrettPREIS = $_POST['txt_BrettPREIS'];
			$BrettHERSTELLER = $_POST['txt_BrettHERSTELLER'];
			echo "<p>$BrettTYP</p>";
			echo "<p>$BrettPREIS</p>";
			echo "<p>$BrettHERSTELLER</p>";
			
			$db=new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
			$db->query("INSERT INTO Brett (BrettTYP,BrettPREIS,BrettHERSTELLER) VALUES ('$BrettTYP','$BrettPREIS','$BrettHERSTELLER');");
			$db->close();
		}
	?>
	</body>

<?php
	
	$X=47;
	$x=49;
	$db = new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
	
	$res = $db->query("SELECT * FROM Brett;");

?>

	<table border="2px">
	<tr>
		<th>BrettID</th>
		<th>BrettMATERIAL</th>
		<th>BrettPREIS</th>
		<th>BrettHERSTELLER</th>
	</tr>
	
<?php
	
	while($ds=$res->fetch_object()){
		echo "<tr>";
		echo "<td>".$ds->BrettID."</td><td>".$ds->BrettMATERIAL."</td><td>".$ds->BrettPREIS."</td><td>".$ds->BrettHERSTELLER."</td>";
		echo "</tr>"; 
		
	}
	echo "</table>";
	$res->free();
	$db->close();
?>	

</html>
