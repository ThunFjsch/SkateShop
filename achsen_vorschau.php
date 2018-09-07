<html>

<?php
	
	$X=47;
	$x=49;
	$db = new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
	
	$res = $db->query("SELECT * FROM Achsen;");

?>

	<table border="2px">
	<tr>
		<th>AchsenID</th>
		<th>AchsenTYP</th>
		<th>AchsenPREIS</th>
		<th>AchsenHERSTELLER</th>
	</tr>
	
<?php
	
	while($ds=$res->fetch_object()){
		echo "<tr>";
		echo "<td>".$ds->AchsenID."</td><td>".$ds->AchsenTYP."</td><td>".$ds->AchsenPREIS."</td><td>".$ds->AchsenHERSTELLER."</td>";
		echo "</tr>"; 
		
	}
	echo "</table>";
	$res->free();
	$db->close();
?>	

</html>
