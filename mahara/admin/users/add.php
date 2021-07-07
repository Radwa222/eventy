<?php
     $error_fields = array();
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
        if (!$error_fields) {
            //conect data
            $conn=mysqli_connect("localhost","root","","blog");
            if (!$conn) {
                echo "mysqli has problem";
                echo mysqli_connect_error();
                exit;
                # code...
            }
           
            // avoide enjj  
            $name= mysqli_escape_string($conn,$_POST['name']);
            $password= mysqli_escape_string($conn,$_POST['password']);
            $email= mysqli_escape_string($conn,$_POST['email']);
            //files uploads
            $uploads_dir= $_SERVER['DOCUMENT_ROOT'].'/uploads';
            $avatar='';
            if ($_FILES["avatar"]['error'] == UPLOAD_FRR_OK){
                $tmp_name=$_FILES["avatar"]["tmp_name"];
                $avatar=basename($_FILES["avatar"]["name"]);
                move_uploaded_file($tmp_name,"$uploads_dir/$name.$avatar");
            
            }else{
                echo"can not be uploded";
                exit;
            }
            //insert data
            
            $query = "INSERT INTO `users`(`name`,`password`,`email`,`avatar`) 
            VALUES('".$name."','".$password."','".$email  ."','".$avatar  ."')";
            if(mysqli_query($conn,$query)){
                echo header("location:list.php");
                exit;
            }else{
                echo $query;
                echo mysqli_error($conn);
            }
            mysqli_close($conn);

        }
     }

?>
<html>
  <head>
  <title>add user</title> 
  </head>
  <body>
    <form method="POST" enctype="multipart/form-data" >
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
  
    
   <input type="submit" name="submit" id="submit"  value="add user">
    </form>
  
  </body>









</html>