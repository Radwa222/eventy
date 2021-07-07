<?php
$db=mysqli_connect('localhost','root', '','client');
if(isset($_POS['submit'])){
    $firstname=mysqli_real_escape_string($db,$_POST['fn']);
    $secondname=mysqli_real_escape_string($db,$_POST['sn']);
    $email=mysqli_real_escape_string($db,$_POST['Em']);
    $password=mysqli_real_escape_string($db,$_POST['pss']);
    $sql="INSERT INTO mimi(firstname,secondname,email,password)VALUES('$firstname','$secondname','$email','$password')";
    mysqli_query($db,$sql);
  }
?>