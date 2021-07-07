<?php
 
       //conn
       $conn = mysqli_connect("localhost","root","","db_event_management");
       if (!$conn) {
           echo mysqli_connect_error();
           exit;
       }
      
       //select all
       $query = "SELECT * FROM `service_provider`";
       //search
       if(isset($_GET['search'])){
        $search=mysqli_escape_string($conn,$_GET['search']);
        $query .=" WHERE `service_provider`.`name` LIKE'%" .$search."%' OR `service_provider`.`role` LIKE '%".$search. "%'";
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
       <th>role</th>
       <th>photo</th>
       <th>action</th>
       <th>statues</th>

       
   </tr>
   </thead>
   <?php
   //LOOP ON ROWST
   while($row = mysqli_fetch_assoc($result)){
   ?>

     <tr>
     <td><?=$row['spid']?></td>
     <td><?=$row['name']?></td>
     <td><?=$row['role']?></td>
     <td><?=$row['statues']?></td>

     <td><?php if($row['avatar']){
       ?><img src="../../images/<?=$row['avatar']?>"style="width:50px; height:50px;"/> 
       <?php }else{?><img src="../../images/<?=$row['avatar']?>"style="width:50px; height:50px;"/><?php } ?>
       </td>

     <td><a href="edit.php?id=<?=$row['spid']?>">edit</a> | <a href ="delete.php?id=<?=$row['spid']?>">delete</a> </td>
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