<?php
     //conect data base
     $error_fields=array();
     $conn=mysqli_connect("localhost","root","","blog");
     if (!$conn) {
         echo "mysqli has problem";
         echo mysqli_connect_error();
         exit;
         # code...
     }
     //select user
     // edit.php?id=1=>$_GET['id']
     $id=filter_input(INPUT_GET,'id');
     echo $id;
     $select="SELECT * FROM `users` WHERE `users` . `id`=" . $id. " LIMIT 1 " ;
     $result=mysqli_query($conn,$select);
     $row=mysqli_fetch_assoc($result);

     if ($_SERVER['REQUEST_METHOD']=='POST'){
         //valadition
       if (!(isset($_POST['name']) && !empty($_POST['name']))) {
        $error_fields[]= "name";
    }
    if (!(isset($_POST['email']) && !empty($_POST['email']))) {
        $error_fields[]= "email";
    }
    if (!(isset($_POST['password'])&& strlen($_POST['password'])>5 )) {
        $error_fields[]= "password";
    }
    if (!(isset($_POST['avatar'])&& !empty($_POST['avatar']))) {
        $error_fields[]= "avatar";
    }
    if (!$error_fields) {
        //escape sp cahrs
        $id=filter_input(INPUT_GET,'id');
        $name= mysqli_escape_string($conn,$_POST['name']);
         $password= mysqli_escape_string($conn,$_POST['password']);
         $email= mysqli_escape_string($conn,$_POST['email']);
         $avatar= mysqli_escape_string($conn,$_POST['avatar']);

         //update
         $query="UPDATE  `users` SET  `name`='".$name."', `password`='".$password."', `email`='".$email."', `avatar`='".$avatar."'
          WHERE  `users`. `id`=".$id ;
         if (mysqli_query($conn,$query)) {
             header("location:list.php");
             exit;
         }else{
             echo mysqli_error($conn);
         }

    }
     }

     //close data
     mysqli_close($conn);
?>
<html>
  <head>
  <title>add user</title> 
  </head>
  <body>
    <form method="POST">
    <label>user name </label>
   <input type="text" name="name" id="name" value="<?=(isset($_POST['name']))?$_POST['name'] :''?>"/>
   <?php if(in_array("name",$error_fields)) echo"* please enter your name ";?><br/>

   <label>password </label>
   <input type="password" name="password" id="password" value="<?=(isset($_POST['name']))?$_POST['name'] :''?>"/> 
   <?php if(in_array("password",$error_fields)) echo"* please enter your password ";?><br/>

   <label>e-mail </label>
   <input type="email" name="email" id="email"value="<?=(isset($_POST['name']))?$_POST['name'] :''?>"/> 
   <?php if(in_array("email",$error_fields)) echo"* please enter your email ";?><br/>

   <br>
   <label for="avatar">avatar</label>
   <input type="file" id="avatar" name="avatar" /> 
   <br>
  
    
   <input type="submit" name="submit" id="submit"  value="edit user">
    </form>
  
  </body>









</html>