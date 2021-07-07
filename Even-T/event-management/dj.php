 <?php

 $conn = mysqli_connect("localhost","root","","db_event_management");
 if($conn){
     echo"conection is done";
     echo"<br>";
 
 }else{
     echo"conetion filed";
 }
 if(isset($_POST['submitDj'])){
      $selectDj=$query = "SELECT * FROM `service_provider` WHERE `service_provider`. `role`='dj'";
      echo $selectDj;
      $result = mysqli_query($conn,$selectDj);
      echo"done65";
      header("location:dj.php");
      mysqli_close($conn);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dis</title>
</head>
<body>
 <p>our djs is</p>
   <?Php
  # while($row= mysqli_fetch_assoc($result)){
   ?>

     <tr>
     <td><?=$row['name']?></td>
     <td><?=$row['role']?></td>
     <td><?php if($row['avatar']){
       ?><img src="../../images/<?=$row['avatar']?>"style="width:50px; height:50px;"/> 
       <?php }else{?><img src="../../images/<?=$row['avatar']?>"style="width:50px; height:50px;"/><?php } ?>
       </td>
     </tr>
     <?php
     #}
     ?>
    
   </table>

    
</body>
</html>