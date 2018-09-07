<html>
<head>
		<!--Title and charset on Top of the Website-->
		<title>SkateShop</title>
		<meta charset="utf-8">
		<!--All Links from the global Stylesheets for Nav, Header, Content and Body-->
		<!--All Stylesheets and be found under the Styles folder-->
		<link rel="stylesheet" type="text/css" href="../styles/globalStyles/bodyStyle.css">
		<link rel="stylesheet" type="text/css" href="../styles/globalStyles/headerStyle.css">
		<link rel="stylesheet" type="text/css" href="../styles/globalStyles/navStyle.css">
		<link rel="stylesheet" type="text/css" href="../styles/globalStyles/contentStyle.css">
		<!--All the exclusive Php styles-->
		<link rel="stylesheet" type="text/css" href="../styles/phpStyles/phpInputStyle.css">
		<link rel="stylesheet" type="text/css" href="../styles/phpStyles/phpTableStyle.css">
		<!--The Fonts of the Website-->
		<!--This is the Link of the Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans" rel="stylesheet">		
	</head>
	<body>
		<!--Begin of Nav-->
		<nav>
			<br>
			<!--Created two ul to have two Lines of nav so it dosent look so stuffed-->
			<!--Nav is also Completet and dont need any Word-->
			<ul class="firstUl">
				<li><a href=http://localhost/SkateShop/index.php>Home</a></li>
				<li><a href=http://localhost/SkateShop/websites/achsen.php>Achsen</a></li>
				<li><a href=http://localhost/SkateShop/websites/brett.php>Bretter</a></li>
				<li><a href=http://localhost/SkateShop/websites/griptape.php>Griptape</a></li>
				<li><a href=http://localhost/SkateShop/websites/kugellager.php>Kugellager</a></li>
			</ul>
			<br>
			<br>
			<br>
			<ul class="secondUl">
				<li><a href=http://localhost/SkateShop/websites/mutter.php>Muttern</a></li>
				<li><a href=http://localhost/SkateShop/websites/raeder.php>Räder</a></li>
				<li><a href=http://localhost/SkateShop/websites/schrauben.php>Schrauben</a></li>
				<li><a href=http://localhost/SkateShop/websites/board_art.php>Board Design</a></li>
			</ul>
			<br><br>
		</nav>
		<!--Begin of Header-->
		<header>
			<div class="slideshow-container">						<!--One div, inside are the Div´s with Pictures-->
				<div class="mySlides fade">							<!--Classes for the Css and Js files-->
					<div class="numbertext">1 / 3</div>				<!--Telling what Picture it is-->
					<img src="../pictures/globalPictures/headerPicOne.jpg" class="picture" style="width: 100%;">
					<div class="text">Best Artist</div>				<!--Picture description-->
				</div>

				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<!--TODO: Fix the Picture Border with Gimp-->
					<img src="../pictures/globalPictures/headerPicTwo.jpg" class="picture" style="width: 100%;">
					<div class="text">Upcomming Brands</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="../pictures/globalPictures/headerPicThree.jpg" class="picture" style="width: 100%;">
					<div class="text">Innovativ Design</div>
				</div>
			</div>
			<!--The Dots to show what Picture is there right now-->
			<div style="text-align:center; background-color: #2F7F72;">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
			<!--Title of the Website-->
			<div class="title">
				<h1>Boardslide Shop</h1>
			</div>
		</header>
		<!--Begin of the Inputfields-->
		<div class="inputField">		<!--Class for Css-->
			<form method="post">
				<ul>
					<li>Bitte geben Sie die Informationen ein!</li><br>					<!-- TODO: Marvin das hier noch Kommentieren ~Arin-->
					<li>Board Art: <input type="text" name="txt_BoardART"></li>
					<br><br>
					<li><button class="buttonStyle">Bestätigen</button>
				<ul>
			</form>
		</div>
	
		<?php
			if(isset($_POST['txt_BoardART'])){	//if abfrage für den Inhat
				$BoardART = $_POST['txt_BoardART'];	//einfügen in die Variabel
				
				//echo "<p>$BoardART</p>"; 			
				
				$db=new mysqli("localhost","root","root","fahrbareuntersaetze");	// Verbinfung zur DB
				$db->query("INSERT INTO Board_ART (BoardART) VALUES ('$BoardART');");	//Query mit Insert
				$db->close();														// schließung der Verbindung
			}
		?>
		<script src="../scriptJs/globalScripts/slider.js"></script>
	</body>
<?php
	
	$X=47;
	$x=49;
	$db = new mysqli("localhost","root","root","fahrbareuntersaetze");	//Verbindung
	
	$res = $db->query("SELECT * FROM Board_Art;");						//Query in einer Variabel gespeichert

?>
		<!--Begin of the Table Content of the Website-->
		<!--More in the Css File-->	
		<div class="tableContent">
		<table border="2px" class="phpTable">
			<tr>
				<th>ID</th>
				<th>BoardART</th>
			</tr>
	
<?php
	
	while($ds=$res->fetch_object()){
		echo "<tr>";
		echo "<td>".$ds->ID."</td><td>".$ds->BoardART."</td>";
		echo "</tr>"; 
		
	}
	echo "</table>";
	echo "</table>";
	$res->free();
	$db->close();
?>	

<?php
	$tableName="Board_ART";
	$link="../websites/board_art.php";
	include("../scriptPhp/Del_Script.php");	
?>

</html>
