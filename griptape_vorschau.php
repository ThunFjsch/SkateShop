<html>

<?php
	
	$X=47;
	$x=49;
	$db = new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
	
	$res = $db->query("SELECT * FROM Griptape;");

?>

	<table border="2px">
	<tr>
		<th>GriptapeID</th>
		<th>GriptapeMATERIAL</th>
		<th>GriptapePREIS</th>
		<th>GriptapeHERSTELLER</th>
	</tr>
	
<?php
	
	while($ds=$res->fetch_object()){
		echo "<tr>";
		echo "<td>".$ds->GriptapeID."</td><td>".$ds->GriptapeMATERIAL."</td><td>".$ds->GriptapePREIS."</td><td>".$ds->GriptapeHERSTELLER."</td>";
		echo "</tr>"; 
		
	}
	echo "</table>";
	$res->free();
	$db->close();
?>	

</html>
