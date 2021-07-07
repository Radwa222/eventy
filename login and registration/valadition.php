  <?php

    session_start();

    $conn=mysqli_connect('localhost','root' , '',) ;

    mysqli_Select_db($conn,'kemo');

    $name = $_POST['username'];
    $pass = $_POST['password'] ;


    $s = "SELECT * FROM user1 where name='$name' && password='$pass'";
    $result = mysqli_query($conn, $s) ;

    $num = mysqli_num_rows($result);


    if($num==1){
      $_SESSION['username']= $name ;
      header('location:homepage.php');
    	
    }else{
      header('location:home.php');


    	
    }


   ?>