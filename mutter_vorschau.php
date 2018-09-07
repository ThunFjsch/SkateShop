<html>

<?php
	
	$X=47;
	$x=49;
	$db = new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
	
	$res = $db->query("SELECT * FROM Muttern;");

?>

	<table border="2px">
	<tr>
		<th>MutterID</th>
		<th>MutterTYP</th>
		<th>MutterPREIS</th>
		<th>MutterHERSTELLER</th>
	</tr>
	
<?php
	
	while($ds=$res->fetch_object()){
		echo "<tr>";
		echo "<td>".$ds->MutterID."</td><td>".$ds->MutterTYP."</td><td>".$ds->MutterPREIS."</td><td>".$ds->MutterHERSTELLER."</td>";
		echo "</tr>"; 
		
	}
	echo "</table>";
	$res->free();
	$db->close();
?>	

</html>
