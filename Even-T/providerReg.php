
<?php require_once 'backend/registration.php';?>
<!DOCTYPE html>
<head>
    <title>log up</title>
    <link rel="stylesheet" href="regist.css">
</head>
<body>
<form action="providerReg.php" method="POST">
<h1>Sign Up </h1>

		<div class="inp">
			<input type="text" name="name" placeholder=" Name">
			<?php if (isset($erorr1)){ ?>
			<P><?php echo  $erorr1 ?> </P>
			<?php  } ?>	
		</div>
		<div class="inp">
			<input type="email" name="email" placeholder=" email">
			<?php if (isset($erorr1)){ ?>
			<P><?php echo  $erorr1 ?> </P>
			<?php  } ?>	
		</div>
		<div class="inp">
			<input type="text" name="password" placeholder=" password">
			<?php if (isset($erorr1)){ ?>
			<P><?php echo  $erorr1 ?> </P>
			<?php  } ?>	
		</div>
		<div class="inp">
			<input type="text" name="price" placeholder=" price">
			<?php if (isset($erorr1)){ ?>
			<P><?php echo  $erorr1 ?> </P>
			<?php  } ?>	
		</div>

		<div class="inp">
			<input type="text" name="role"placeholder="role">
			<?php if (isset($erorr3)){ ?>
			<P><?php echo  $erorr3 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
			
			<input type="text" name="info"  placeholder="info"> 
			<?php if (isset($erorr7)){ ?>
			<P><?php echo  $erorr7 ?> </P>
			<?php  } ?>	
		</div>
        <div class="inp">
		
			<input type="file" name="avatar" placeholder="email">
			<?php if (isset($erorr4)){ ?>
			<P><?php echo  $erorr4 ?> </P>
			<?php  } ?>	
		</div>
    
		<div class="inp">
			<button type="submit" name="submit1"> submit</button>
		</div>
		<a href="login.php"><p>Already a user?</p>  </a> <br>
	</form>

</body>