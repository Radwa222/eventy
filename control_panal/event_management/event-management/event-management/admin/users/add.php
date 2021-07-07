<?php
     $error_fields = array();
     echo"test1";
     if ($_SERVER['REQUEST_METHOD']=='POST'){
         //valadition
        if (!(isset($_POST['name']) && !empty($_POST['name']))) {
            $error_fields[]= "name";
            echo"test1*";
        }
        if (!(isset($_POST['role']) && !empty($_POST['role']))) {
            $error_fields[]= "role";
            echo"test1**";
        }
        if (!$error_fields) {
            //conect data
            $conn=mysqli_connect("localhost","root","","db_event_management");
            echo"test1***";
            if (!$conn) {
                echo "mysqli has problem";
                echo mysqli_connect_error();
                echo"*test1*";
                
                # code...
            }
           
            // avoide enjj  
            $name= mysqli_escape_string($conn,$_POST['name']);
            $role= mysqli_escape_string($conn,$_POST['role']);
            echo"test17*";
            //files uploads
            $uploads_dir= $_SERVER['DOCUMENT_ROOT'].'../../uploads';
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
            
            $query = "INSERT INTO `service_provider`(`name`,`role`,`avatar`) 
            VALUES('".$name."','".$role."','".$avatar  ."')";
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

   

   <label>role </label>
   <input type="text" name="role" id="role"value="<?=(isset($_POST['role']))?$_POST['role'] :''?>"/> 
   <?php if(in_array("role",$error_fields)) echo"* please enter your role ";?><br/>
   
   <br>
   <label for="avatar">avatar</label>
   <input type="file" id="avatar" name="avatar" /> 
   <br>
  
    
   <input type="submit" name="submit" id="submit"  value="add user">
    </form>
  
  </body>









</html>