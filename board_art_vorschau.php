<html>

<?php
	
	$X=47;
	$x=49;
	$db = new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
	
	$res = $db->query("SELECT * FROM Board_Art;");

?>

	<table border="2px">
	<tr>
		<th>BoardID</th>
		<th>BoardART</th>
	</tr>
	
<?php
	
	while($ds=$res->fetch_object()){
		echo "<tr>";
		echo "<td>".$ds->BoardID."</td><td>".$ds->BoardART."</td>";
		echo "</tr>"; 
		
	}
	echo "</table>";
	$res->free();
	$db->close();
?>	

</html>
