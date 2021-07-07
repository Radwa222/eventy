<?php

       session_start();
       if(isset($_SESSION['id'])){
         echo'<P> welcom '.$_SESSION['email'].'</P>';
         echo '<a href="../../logout.php">logout</a>';
       }else{
         header("location:/mahara/login.php");
       }
 
       //conn
       $conn = mysqli_connect("localhost","root","","blog");
       if (!$conn) {
           echo mysqli_connect_error();
           exit;
       }
      
       //select all
       $query = "SELECT * FROM `users`";
       //search
       if(isset($_GET['search'])){
        $search=mysqli_escape_string($conn,$_GET['search']);
        $query .=" WHERE `users`.`name` LIKE'%" .$search."%' OR `users`.`email` LIKE '%".$search. "%'";
    }
     $result = mysqli_query($conn,$query);

       mysqli_close($conn);
?>

<html>
   <head>
   <title>admin:: list users</title>
   </head>
   <body>
   <h1>our userse</h1>
   <form method="GET">
   <input type="text" name="search" placeholder="search with email or name " />
   <input type="submit" value="search" />
   </form>
   <table>
   <thead>
   <tr>
       <th>id</th>
       <th>name</th>
       <th>email</th>
       <th>avatar</th>
       <th>action</th>
       
   </tr>
   </thead>
   <?php
   //LOOP ON ROWST
   while($row = mysqli_fetch_assoc($result)){
   ?>

     <tr>
     <td><?=$row['id']?></td>
     <td><?=$row['name']?></td>
     <td><?=$row['email']?></td>

     <td><?php if($row['avatar']){
       ?><img src="../../uploads/<?=$row['avatar']?>"style="width:50px; height:50px;"/> 
       <?php }else{?><img src="../../uploads/noimage.png?>"style="width:50px; height:50px;"/><?php } ?>
       </td>

     <td><a href="edit.php?id=<?=$row['id']?>">edit</a> | <a href ="delete.php?id=<?=$row['id']?>">delete</a> </td>
     </tr>
     <?php
     }
     ?>
     </tdoby>
     <tfoot>
       <tr>
         <td colspan="2" style="text-align:center"> <?= mysqli_num_rows($result)?> users </td>
         <td colspan= "2" style="text-align:center"><a href = "add.php"> add user</a> </td>
      </tr>
     </tfoot>
   </table>

   </body>

</html>