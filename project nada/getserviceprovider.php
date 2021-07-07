<?php
    

    if (isset($_SERVER['categoryId'])) {
        $category=$_SERVER['categoryId'];
        echo $category;
        $Quary="SELECT * FROM `cart`  WHERE role=$category";
        $db=mysqli_connect('localhost','root','','db_event_management'); 
        $result=mysqli_query($db,$Quary); 
        mysqli_close($db);

    }
      

?>
