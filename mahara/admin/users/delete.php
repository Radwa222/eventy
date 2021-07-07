<?php

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
     $query="DELETE FROM `users` WHERE`users` . `id`=" . $id. " LIMIT 1 " ;
     if (mysqli_query($conn,$query)) {
         header("location:list.php");
         exit;
     }else{
         echo mysqli_error($conn);
     }

     mysqli_close($conn);


?>