<?php
// session 
if (!isset($_SESSION)) { 
    session_start(); 
 $error=array();
} 
// conect database 
$db=mysqli_connect('localhost','root','','db_event_management'); 
if(!$db){
    echo"we have conection proplem";
}else{
    
}
 
// varibels and qyary   
if (isset($_POST['submit'])) { 
    echo "reg first";
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
        if( $result=mysqli_query($db,$sql)){
            header("location:home.php");
        }; 
          mysqli_close($db); 
    // render to home page  
    }
   
 
} 
// varibels and qyary   
if (isset($_POST['submit1'])) { 
    echo "reg sec";
    $username=mysqli_Real_escape_string($db,$_POST['name']); 
    $email=mysqli_Real_escape_string($db,$_POST['email']); 
    $password=mysqli_Real_escape_string($db,$_POST['password']); 
    $price=mysqli_Real_escape_string($db,$_POST['price']); 
    $role=mysqli_Real_escape_string($db,$_POST['role']); 
    $avatar=mysqli_Real_escape_string($db,$_POST['avatar']); 
    $info=mysqli_Real_escape_string($db,$_POST['info']);   
    if(empty($username)) {
        $erorr1="name is required";
    }
    if(empty($email)) {
        $erorr1="email is required";
    }
    if(empty($password)) {
        $erorr1="password is required";
    }  
    if(empty($price)) {
        $erorr1="price is required";
    } 
    if(empty($role)){
        $erorr33="role is required";
    }
    if(empty($avatar)){
        $erorr77="avatar is required";
    }
    if(empty($info)){
        $erorr4="info is required";

    }
    if (count($error)==0)
    {
        # 
         $sql="INSERT INTO `cart`( `id` , `name`,`email`, `password`, `price`, `image`, `role`, `info` ) VALUES 
         (null,'$username','$email','$password','$price',' $avatar','$role','$info')"; 
         echo $sql;
        if($result=mysqli_query($db,$sql)){
            echo "done";
        }else{
            echo "erroe";
        }
          mysqli_close($db); 
    // render to home page  
    }
   
 
} 

// login 

if (isset($_POST['login'])){ 
    $email=mysqli_Real_escape_string($db,$_POST['email']);
    $password1=mysqli_Real_escape_string($db,$_POST['passowrd']); 
    if (empty($email)){
        $erorr44 ="email is not correct";
    } 
    if (empty($password1)){
        $erorr22 ="password  is not correct";
    }
    $sql1="SELECT * FROM `tbl_users` WHERE  email='$email' and pwd='$password1'" ; 
    $ruslt=mysqli_query($db,$sql1);  
    if(mysqli_num_rows($ruslt)==TRUE){ 
        $_SESSION['email'] = $email; 
        $_SESSION['welcom'] = "welcom abrod youe are one of our family now "; 
        while ($row = $ruslt->fetch_assoc()) {
            #printf("%s (%s)\n", $row["email"], $row["id"],$row["name"]);
            $_SESSION['id']=$row["id"];
            $_SESSION['name']=$row["name"];
        }
        if($_SESSION['email'] =='admin@gmail.com'){
            header("Location:event-management/index.php");

        }else{
            header("Location:userprofile.php?id=". $_SESSION['id']);  

        }
    



    }else{
        
        echo "user name or password is wrong please try agin";


    }
    mysqli_close($db);


    


}

// login 

if (isset($_POST['login1'])){ 
    $email=mysqli_Real_escape_string($db,$_POST['email']);
    $password=mysqli_Real_escape_string($db,$_POST['password']); 
    if (empty($email)){
        $erorr44 ="email is not correct";
    } 
    if (empty($password)){
        $erorr22 ="password  is not correct";
    }
    $sql1="SELECT * FROM `cart` WHERE  email='$email' and password='$password'" ; 
    $ruslt=mysqli_query($db,$sql1); 
    if(mysqli_num_rows($ruslt)==TRUE){ 
        $_SESSION['email'] = $email; 
        while ($row = $ruslt->fetch_assoc()) {
            printf("%s (%s)\n", $row["email"], $row["id"]);
            $_SESSION['id']=$row["id"];
            
        }
        header("Location:profile1.php?id=". $_SESSION['id']);  #id is not here try another one 9

    



    }else{
        
        echo "user name or password is wrong please try agin";


    }
    mysqli_close($db);


    


}



?>
