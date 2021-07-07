<?php
// session 
if (!isset($_SESSION)) { 
    session_start(); 
 $error=array();
} 
// conect database 
    $db=mysqli_connect('localhost','root','','sectionbis'); 
 
// varibels and qyary   
if (isset($_POST['submit'])) { 
    $username=mysqli_Real_escape_string($db,$_POST['username']); 
    $email=mysqli_Real_escape_string($db,$_POST['email']); 
    $password1=mysqli_Real_escape_string($db,$_POST['password']); 
    $password2=mysqli_Real_escape_string($db,$_POST['password2']); 
    if(empty($username)) {
        $erorr1="name is required";
    }
    if(empty($email)) {
        $erorr2="email is required";
        }
    if(empty($password1)) {
        $erorr3="Password Is Required";
            }  
    if(empty($password2)) {
         array_push($error,"Comfirmation Password Is Required");
                }       
    if ($password1!=$password2){
        array_push($error,"passwords do not match");
          }
    if (count($error)==0){
    # code... 
     $sql="INSERT INTO student(name,email,passowrd) VALUES('$username',' $email','$password1')"; 
    mysqli_query($db,$sql); 
    $_SESSION['username'] = $username; 
    $_SESSION['welcom'] = "  welcom abrod youe are one of our family now "; 
 
    // render to home page  
    header('location:welcom.php'); }
   
 
} 

// login 

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
   
?>
