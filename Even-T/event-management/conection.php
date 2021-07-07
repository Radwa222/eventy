<?php
// session 
if (!isset($_SESSION)) { 
    session_start(); 
 $error=array();
} 
// conect database 
$db=mysqli_connect('localhost','root','','db_event_management'); 
 
// varibels and qyary   
if (isset($_POST['submit'])) { 
    $username=mysqli_Real_escape_string($db,$_POST['name']); 
    $password1=mysqli_Real_escape_string($db,$_POST['password']); 
    $address=mysqli_Real_escape_string($db,$_POST['address']); 
    $phone=mysqli_Real_escape_string($db,$_POST['phone']); 
    $email=mysqli_Real_escape_string($db,$_POST['email']); 
    $type=mysqli_Real_escape_string($db,$_POST['type']); 
    $bdate=mysqli_Real_escape_string($db,$_POST['bdate']); 
    if(empty($username)) {
        $erorr1="name is required";
    }
    if(empty($password1)) {
        array_push($error,"pleas enter password");

    }  
    if(empty($address)){
        $erorr3="address is required";
    }
    if(empty($phone)){
        $erorr7="phone is required";
    }
    if(empty($email)){
        $erorr4="email is required";

    }
    if(empty($type)){
        $erorr5="role is required";

    }
    if(empty($bdate)){
        $erorr6="date is required";

    }
    if (count($error)==0)
    {
        # 
         $sql="INSERT INTO `tbl_users`( `name`, `pwd`, `address`, `phone`, `email`, `type`, `bdate`) VALUE
         ('$username',' $password1','$address','$phone','$email','$type','$bdate')"; 
         $result=mysqli_query($db,$sql); 
         
         echo"done";
          $_SESSION['name'] = $username; 
          $_SESSION['welcom'] = "  welcom abrod youe are one of our family now "; 
         
          mysqli_close($db); 
    // render to home page  
    }
   
 
} 

// login 
/*
if (isset($_POST['login'])){ 
    $username=mysqli_Real_escape_string($db,$_POST['username']); 
    $password1=mysqli_Real_escape_string($db,$_POST['passowrd']); 
    if (empty($username)){
        $erorr10 ="user name is not correct";
    } 
    if (empty($password1)){
        $erorr20 ="password  is not correct";
    }
    $sql1="SELECT * FROM student WHERE name='$username' and passowrd='$password1'"; 
    $ruslt=mysqli_query($db,$sql1); 
    if(mysqli_num_rows($ruslt)==TRUE){ 
        $_SESSION['username'] = $username; 
        $_SESSION['welcom'] = "  welcom abrod youe are one of our family now "; 
        header('location:welcom.php'); 


    }else{
        header('location:home.php'); 


    }


    


}

*/
?>
