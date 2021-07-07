<!DOCTYPE html>
<html>
<head>
	<title>login and registrtion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<h3 id ="headline">shalby company limtied </h3>
	<p id ="headline1">welcom to our compay by rhis order of the peaky blinders please if u want to be a blinders welcom and sing in  </p>

	<div class = "contanier">
		<div class = "login-box">
		<div class ="row">
			<div class="col-md-6 login-left">
				<h2>login here</h2>
				<form action="valadition.php" method="POST">
					<div class ="form-group">
						<label>username</label>
						<input type="text" name="username" class="form-control" required>	
					</div>
					<br>
					<div class ="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control" required>	
					</div>
					<br>
					<button type="submit" class ="btn btn-primary"> login</button>
					
				</form>
				
			</div>
			<div class="col-md-6 login-right">
				<h2>register here</h2>
				<form action="registrtion.php" method="POST">
					<div class ="form-group">
						<label>username</label>
						<input type="text" name="username" class="form-control" required>	
					</div>
					<br>
					<div class ="form-group">
						<label>password</label>
						<input type="password" name="password" class="form-control" required>	
					</div>
					<br>
					<button type="submit" class ="btn btn-primary"> register</button>
					
				</form>
				
			</div> 
		</div>
	 </div>	
	</div>

</body>
</html>