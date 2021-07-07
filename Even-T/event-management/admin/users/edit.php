<?php
     //conect data base
     $error_fields=array();
     $conn=mysqli_connect("localhost","root","","db_event_management");
     if (!$conn) {
          echo "mysqli has problem";
         echo mysqli_connect_error();
         exit;
         # code...
        }else{
            echo"cenection done";
        }
        $id=filter_input(INPUT_GET,'id');
        echo"<br>";
        echo $id; 
        echo"<br>"; 
        $select="SELECT * FROM `service_provider` WHERE  `service_provider`.`spid`= ".$id." LIMIT 1 " ; #cannot see id 
        echo $select;
        echo"<br>";
        $result=mysqli_query($conn,$select);
        $row=mysqli_fetch_assoc($result);
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            if (!(isset($_POST['name']) && !empty($_POST['name']))) {
                $error_fields[]= "name";
            }
            if (!(isset($_POST['role']) && !empty($_POST['role']))) {
                $error_fields[]= "role";
            }
            if (!(isset($_POST['avatar']) && !empty($_POST['avatar']))) {
                $error_fields[]= "avatar";
            }
            if (!$error_fields) {
                $id=$_GET['id'];
                $name= mysqli_escape_string($conn,$_POST['name']);
                $role= mysqli_escape_string($conn,$_POST['role']);
                $avatar= mysqli_escape_string($conn,$_POST['avatar']);
                $query="UPDATE `service_provider` SET `name`='$name', `role`='$role', `avatar`='$avatar' WHERE`service_provider`. `spid`=".$id." LIMIT 1"; #no action 
                echo $query;
                if (mysqli_query($conn,$query)){
                    echo "donne no erore";
                    
                }else{
                    echo"someting wrong";
                }

            }
        }
        

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


   <label>role </label>
   <input type="text" name="role" id="role"value="<?=(isset($_POST['role']))?$_POST['role'] :''?>"/> 
   <?php if(in_array("email",$error_fields)) echo"* please enter your role ";?><br/>

   <br>
   <label for="avatar">avatar</label>
   <input type="file" id="avatar" name="avatar" /> 
   <br>
  
    
   <input type="submit" name="submit" id="submit"  value="edit user">
    </form>
  
  </body>









</html>