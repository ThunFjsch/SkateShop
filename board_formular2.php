<html>
	
	<head>
		<title>SkateShop</title>
		<meta charset="utf-8">
		<style>
			body{
	background-color: grey;
	margin: 0;
	padding: 0;
	color: white;
}
header{
	background-color: darkgreen;
	padding: 15px;
	width: 90%;
	margin-top: 2.5%;
	margin-left: 5%;
	border-radius: 15px;
}
header h1{
	margin-left: 10%;
	color: white;
	font-size: 36px;
}
form{
	width: 30%;
	margin-left: 35%;
	background-color: darkgreen;
	padding: 15px;
	margin-top: 2.5%;
	border-radius: 15px;
}
form p{
	margin: 1%;
	padding: 0;
	text-align: left;
	font-size: 16px;
	border-radius: 5px;
}
p{
	background-color: darkgreen;
	margin: 0;
	width: 30%;
	margin-left: 35%;
	padding: 15px;
	text-align: center;
	font-size: 24px;
}
		</style>
	</head>
	<body>
	
		<header>
			<h1>Fahrbare Untersätze</h1>
		</header>
	
	<form method="post">
		<p>
			Bitte geben Sie Ihre Daten ein!
		</p>
		<p>
			Username: <input type="text" name="txt_user">
		</p>
		<p>
			Password: <input type="password" name="txt_password">
		</p>
		<p>
			<button>Bestätigen</button>
		</p>
	</form>

	<?php
		if(isset($_POST['txt_user'])) {
			$user = $_POST['txt_user'];
			$password =$_POST['txt_password'];
			echo "<p>$user</p>";
			echo "<p>$password</p>";
			
			$db=new mysqli("localhost","phpmyadmin","root","FahrbareUntersaetze");
			$db->query("INSERT INTO Test (User,Password) VALUES ('$user','$password');");
			$db->close();
		}
	?>
	</body>
</html>
