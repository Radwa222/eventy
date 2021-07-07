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
			<?php if (isset($erorr1)){ ?>
			<P><?php echo  $erorr1 ?> </P>
			<?php  } ?>	
		</div>
		<div class="inp">
			<label >E-mail</label>
			<input type="email" name="email">
			<?php if (isset($erorr2)){ ?>
			<P><?php echo  $erorr2 ?> </P>
			<?php  } ?>	
		</div>
		<div class="inp">
			<label >Password</label>
			<input type="password" name="password">	
			<?php if (isset($erorr3)){ ?>
			<P><?php echo  $erorr3 ?> </P>
			<?php  } ?>	
			
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