<php    
while ($row = mysqli_fetch_assoc($result)) {
   echo $result;
      }?>
<!DOCTYPE html>
 <head>
     <title> LOGIN </title>
     <link rel="stylesheet" href="login.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
     <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
     <!-- Load Require CSS -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <!-- Font CSS -->
     <link href="assets/css/boxicon.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
     <!-- Load Tempalte CSS -->
     <link rel="stylesheet" href="assets/css/templatemo.css">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="assets/css/custom.css">
 
    </head>

 <body>
 <form action="home.php" method="POST">
    <div class="form">
         <div class="textbox">
           <i class="fas fa-user"></i>
			     <input type="email" name="email" placeholder="Email">
			     <?php if (isset($erorr44)){ ?>
			     <P><?php echo  $erorr44 ?> </P>
		      	<?php  } ?>	
		     </div>
         <div class="textbox">
           <i class="fas fa-unlock-alt"></i>
			   <input type="passowrd" name="password"  placeholder="Email">	
			    <?php if (isset($erorr22)){ ?>
			    <P><?php echo  $erorr22 ?> </P>
			    <?php  } ?>	
        </div>
         	<button class="button"  type="submit" name="login1"> login</button>
        <h5> creat new account <a href="providerReg.php" > Sign Up </a> </h5>
        <h5> user <a href="home.php" > go home </a> </h5>

   
 </body>