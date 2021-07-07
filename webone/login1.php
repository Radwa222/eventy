<?php

session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'sectionbis');

$name=$_POST['username'];
$password=$_POST['password'];

$s="SELECT* FROM student where  name='$name' && password='$password'";

$result= mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username']=$name;
    $_SESSION['welcom']="welcom new member in family ";
    header('location:welcom.php');
}else{
    header('location:welcom.php');
    

?>