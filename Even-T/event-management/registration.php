<?php  include_once("conection.php"); ?>
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
			<input type="text" name="name">
			<?php if (isset($erorr1)){ ?>
			<P><?php echo  $erorr1 ?> </P>
			<?php  } ?>	
		</div>

		<div class="inp">
			<label >Password</label>
			<input type="password" name="password">	
			<?php if (isset($erorr2)){ ?>
			<P><?php echo  $erorr2 ?> </P>
			<?php  } ?>	
			
		</div>
		<div class="inp">
			<label>address </label>
			<input type="text" name="address">
			<?php if (isset($erorr3)){ ?>
			<P><?php echo  $erorr3 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
			<label>phone </label>
			<input type="text" name="phone">
			<?php if (isset($erorr7)){ ?>
			<P><?php echo  $erorr7 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
			<label>email </label>
			<input type="email" name="email">
			<?php if (isset($erorr4)){ ?>
			<P><?php echo  $erorr4 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
			<label>type </label>
			<input type="text" name="type">
			<?php if (isset($erorr5)){ ?>
			<P><?php echo  $erorr5 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
			<label>birthday </label>
			<input type="text" name="bdate">
			<?php if (isset($erorr6)){ ?>
			<P><?php echo  $erorr6 ?> </P>
			<?php  } ?>	
		</div>
		<div class="inp">
			<button type="submit" name="submit"> send</button>
		</div>
		<a href="login.php"><p>Already a user?</p>  </a> <br>
	</form>

</body>
</html>