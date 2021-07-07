<?php

 session_start();
 if (!isset($_SESSION['username'])) {
 	header('location:home.php');
 	# code...
 }

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>homepage</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
 <body>
 	
 	
 	<div class="pop">
 		<h1>welcom <?php echo $_SESSION['username'];?> welcom to our compny  </h1>

 	</div>

 	<div class="pop1" >
 		<a  href="logout.php">logout</a>
 	</div>
 
 </body>
 </html>