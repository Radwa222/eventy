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
			<?php if (isset($erorr10)){ ?>
			<P><?php echo  $erorr10 ?> </P>
			<?php  } ?>		
		</div>
		<div class="inp">
			<label >Password</label>
			<input type="password" name="passowrd">	
			<?php if (isset($erorr20)){ ?>
			<P><?php echo  $erorr20 ?> </P>
			<?php  } ?>
					
		</div>
		<div class="inp">
			<button type="submit" name="login"> login</button>
		</div>
		<a href="home.php"><p>Forget your password?</p></a>

	</form>

</body>
</html>