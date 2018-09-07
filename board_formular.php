<html>
	<form>
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
		if(isset($_GET['txt_user'])) {
			$user = $_GET['txt_user'];
			$password =$_GET['txt_password'];
			echo "<p>$user</p>";
			echo "<p>$password</p>";
		}
	?>
	
</html>
