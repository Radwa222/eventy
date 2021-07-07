<?php  include_once("prograse.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="main">
		<h3>Login</h3>
	</header>
	<form action="home.php" method="POST">
		<div class="inp">
			<label>Username </label>
			<input type="text" name="username">	
		</div>
		<div class="inp">
			<label >Password</label>
			<input type="password" name="passowrd">	
		</div>
		<div class="inp">
			<button type="login" name="login"> login</button>
		</div>
		<a href="home.php"><p>Forget your password?</p></a>

	</form>

</body>
</html>