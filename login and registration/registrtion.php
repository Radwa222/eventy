<?php

    
  header('location:home.php');
  //conection
  $conn=mysqli_connect('localhost','root' , '',) ;
  // data base select
  mysqli_Select_db($conn,'kemo');
  //define varibles
  $name = $_POST['username'];
  $pass = $_POST['password'] ;

  //quary
  $s = "SELECT * FROM user1 where name='$name'";
  $result = mysqli_query($conn, $s) ;

  $num = mysqli_num_rows($result);


  if($num==1){
  	echo "username already taken";

  }else{
  	$reg ="INSERT INTO user1(name,password) VALUES ('$name','$pass')" ;
  	mysqli_query($conn , $reg);
  	echo "registration done sir ";
  }


 ?>