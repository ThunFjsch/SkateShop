<html>
Unsere Website

<?php
	
	$X=47;
	$x=49;
	$db = new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
	
	$res = $db->query("SELECT * FROM Raeder;");

?>

	<table border="2px">
	<tr>
		<th>RaederID</th>
		<th>RaederMATERIAL</th>
		<th>RaederPREIS</th>
		<th>RaederHERSTELLER</th>
	</tr>
	
<?php
	
	while($ds=$res->fetch_object()){
		echo "<tr>";
		echo "<td>".$ds->RaederID."</td><td>".$ds->RaederMATERIAL."</td><td>".$ds->RaederPREIS."</td><td>".$ds->RaederHERSTELLER."</td>";
		echo "</tr>"; 
		
	}
	echo "</table>";
	$res->free();
	$db->close();
?>	

</html>
