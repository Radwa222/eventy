<?php 

    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conn=mysqli_connect("localhost","root","","blog");
         if (!$conn) {
         echo "connection has problem";
         echo mysqli_connect_error();
         exit;
         # code...
     }
     //escape any sp chars 
     $email= mysqli_escape_string($conn,$_POST['email']);
     $password= mysqli_escape_string($conn,$_POST['password']);
     //select query 
     $query="SELECT * FROM `users` WHERE `email`='".$email."' and `password`='".$password."' LIMIT 1 ";
     $result= mysqli_query($conn,$query);
     if($row=mysqli_fetch_assoc($result)){
         $_SESSION['id']=$row['id'];
         $_SESSION['email']=$row['email'];
         header("location:/mahara/admin/users/list.php");
         exit;

     }else{
         $error='Invalid email or password';
     }

     //colse connection
     mysqli_free_result($result);
     mysqli_close($conn);
        

    }
 //to terminat space from data from user use %name= trim($_POST['name']);
 // addslashes() stripslashes() to remove spicial chars from input '' "" 
 // strlen (); lenth  
?>
<html>
<head>
 <title>login page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Slick - Bootstrap 4 Template</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
 <?php if(isset($error)) echo $error; ?>
 <form method="POST" id="contactForm">

<div class="col-md-6">
 <div class="form-group">
  <input type="text" class="form-control" id="email" autocomplete="on" name="email"  value="<?=(isset($_POST['email']))? $_POST['email'] :''?>" placeholder="Email" required data-error="Please enter your Email">
  <div class="help-block with-errors"></div>
  </div>                     



<div class="col-md-6">
 <div class="form-group">
  <input type="text" class="form-control" id="password" name="password" autocomplete="off"  placeholder="password" required data-error="Please enter your password">
  <div class="help-block with-errors"></div>
  </div>    


<div class="submit-button">
<input type="submit" name="submit" value="login"/>
 <div id="msgSubmit" class="h3 hidden"></div> 
 <div class="clearfix"></div> 
 </div>
 </form>
</body>



</html>

