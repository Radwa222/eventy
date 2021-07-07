<?php  include_once("prograse.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header class="main">
		<h3>Registertion</h3>
	</header>
	<form action="home.php" method="POST">
		<div class="inp">
			<label>Username </label>
			<input type="text" name="username">	
		</div>
		<div class="inp">
			<label >E-mail</label>
			<input type="email" name="email">	
		</div>
		<div class="inp">
			<label >Password</label>
			<input type="password" name="password">	
		</div>
		<div class="inp">
			<label >Confirm-password</label>
			<input type="password" name="password2">	
		</div>
		<div class="inp">
			<button type="submit" name="submit"> send</button>
		</div>
		<a href="login.php"><p>Already a user?</p>  </a> <br>
	</form>

</body>
</html>