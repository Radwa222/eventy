
<?php

$conn = mysqli_connect("localhost","root","","db_event_management");
if($conn){
    echo"conection is done";

}else{
    echo"conetion filed";
}
if(isset($_POST['submitDj'])){
     $selectDj=$query = "SELECT * FROM `service_provider` WHERE `service_provider`. `role`='dj'";
     $result = mysqli_query($conn,$selectDj);
     echo"done";
     header("location:dj.php");
     mysqli_close($conn);
 }
 if(isset($_POST['submitwp'])){
    $selectDj=$query = "SELECT * FROM `service_provider` WHERE `service_provider`. `role`='wedding planaer'";
    $result = mysqli_query($conn,$selectDj);
    echo"done2";
    mysqli_close($conn);
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catrgry</title>
</head>
<body>
<form method="POST">
 <div class="card1">
      <p>Dj</p>
       <img src="images/dj.jpg">
       <button type="submit" value="submit" name="submitDj"> viwe more</button>
  </div>
  <div class="card2">
      <p>wedding palans</p>
       <img src="images/wps5.jpg">
       <button type="submit" value="submit" name="submitwp">veiw more</button>
  </div>
</form>
</body>
</html>

