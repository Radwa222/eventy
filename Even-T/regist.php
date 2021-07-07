
<?php require_once 'backend/registration.php';?>
<!DOCTYPE html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" href="regist.css">
</head>
<body>
<form action="regist.php" method="POST">
<h1>Sign Up </h1>

		<div class="inp">
			<input type="text" name="name" placeholder=" Name">
			<?php if (isset($erorr1)){ ?>
			<P><?php echo  $erorr1 ?> </P>
			<?php  } ?>	
		</div>

		<div class="inp">
			<input type="password" name="password" placeholder="password">	
			<?php if (isset($erorr2)){ ?>
			<P><?php echo  $erorr2 ?> </P>
			<?php  } ?>	
			
		</div>
		<div class="inp">
			
			<input type="text" name="address"placeholder="address">
			<?php if (isset($erorr3)){ ?>
			<P><?php echo  $erorr3 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
			
			<input type="text" name="phone" placeholder="first phone"> 
			<?php if (isset($erorr7)){ ?>
			<P><?php echo  $erorr7 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
		
			<input type="email" name="email" placeholder="email">
			<?php if (isset($erorr4)){ ?>
			<P><?php echo  $erorr4 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
			
			<input type="text" name="type" placeholder="job">
			<?php if (isset($erorr5)){ ?>
			<P><?php echo  $erorr5 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
		
			<input type="text" name="bdate" placeholder="birthdate">
			<?php if (isset($erorr6)){ ?>
			<P><?php echo  $erorr6 ?> </P>
			<?php  } ?>	
		</div>
		<div class="inp">
			<button type="submit" name="submit"> submit</button>
		</div>
		<a href="login.php"><p>Already a user?</p>  </a> <br>
	</form>

</body>