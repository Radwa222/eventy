<?php
   $conn=mysqli_connect("localhost","root","","db_event_management");
     if (!$conn) {
         echo "mysqli has problem";
         echo mysqli_connect_error();
         exit;
         # code...
     }
     //select user
     // edit.php?id=1=>$_GET['id']
     $id=$_GET['id'];
     echo $id;
     $query= "UPDATE`cart`SET statues='3' WHERE`cart` . `id`=".$id." LIMIT 1";
     if (mysqli_query($conn,$query)) {
         header("location:aprove.php");
         exit;
        }else{
            echo mysqli_error($conn);
            echo"<br>";
            echo"an fokkin error";
            
     }

     mysqli_close($conn);


?>