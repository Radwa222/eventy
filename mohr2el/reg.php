<?php
include_once("server.php");
?>
<!DOCTYPE html>
<html>
<head>
<title> google</title>
<link rel="stylesheet" href="task2.css">
</head>
<body>
<header>
<h1> Register</h1>
</header>
<form method="post" action="reg.php"><br>
<div class="container">
<label> firstname </lable><br>
<input  type="text" name="fn"><br>
<label> secondname </lable><br>
<input  type="text" name="sn"><br>
<label> Email </lable><br>
<input  type="Email" name="Em"><br>
<label> password </lable><br>
<input  type="password" name="pass"><br>
<input class="btn" type="submit" name="submit">
<p> Already a member? <a href="ass.html">sign in</a></p>
</div>
</form>
</body>
</html>

