<html>

<?php
	
	$X=47;
	$x=49;
	$db = new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
	
	$res = $db->query("SELECT * FROM Kugellager;");

?>

	<table border="2px">
	<tr>
		<th>KugellagerID</th>
		<th>KugellagerTYP</th>
		<th>KugellagerPREIS</th>
		<th>KugellagerHERSTELLER</th>
	</tr>
	
<?php
	
	while($ds=$res->fetch_object()){
		echo "<tr>";
		echo "<td>".$ds->KugellagerID."</td><td>".$ds->KugellagerTYP."</td><td>".$ds->KugellagerPREIS."</td><td>".$ds->KugellagerHERSTELLER."</td>";
		echo "</tr>"; 
		
	}
	echo "</table>";
	$res->free();
	$db->close();
?>	

</html>
