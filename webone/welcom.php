<?php  include_once("prograse.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header >
		<h3> SWAROVSKI MEMBERS </h3>
        <a href="swarovski.php" > return yo home page </a>
	</header>

	<header class="main">
        <?php
        if(isset($_SESSION["welcom"])){
            echo $_SESSION['welcom'];
            unset($_SESSION['welcom']);
        } 
        if(isset($_SESSION["username"])){
            echo $_SESSION['username'];
        }      
        
        
        ?>
	</header>
	

</body>
</html>