<?php
//edit
//conect data base
$error_fields=array();
$conn=mysqli_connect("localhost","root","","db_event_management");
if (!$conn) {
     echo "mysqli has problem";
    echo mysqli_connect_error();
    exit;
    # code...
   }else{
       echo"cenection done";
   }
   
   if ($_SERVER['REQUEST_METHOD']=='POST'){
       if (!(isset($_POST['name']) && !empty($_POST['name']))) {
           $error_fields[]= "name";
       }
       if (!(isset($_POST['role']) && !empty($_POST['role']))) {
           $error_fields[]= "role";
       }
       if (!(isset($_POST['image']) && !empty($_POST['image']))) {
           $error_fields[]= "image";
       }
       if (!$error_fields) {
           $id=filter_input(INPUT_GET,'id');
           $name= mysqli_escape_string($conn,$_POST['name']);
           $role= mysqli_escape_string($conn,$_POST['role']);
           $avatar= mysqli_escape_string($conn,$_POST['image']);
           $query="UPDATE `cart` SET `name`='$name', `role`='$role', `image`='$avatar'WHERE id='".$category."'"; #no action 
           echo $query;
           if (mysqli_query($conn,$query)){
               echo "donne no erore";
               
           }else{
               echo"someting wrong";
           }

       }
   }
   

   mysqli_close($conn);
    

        $category=strval(explode("=",$_SERVER['QUERY_STRING'])[1]);
        $Quary="SELECT * FROM `cart`  WHERE id='".$category."'";
        $db=mysqli_connect('localhost','root','','db_event_management'); 
        $result=mysqli_query($db,$Quary);
        mysqli_close($db);

    
      

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EVENTI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>
<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.html">
                <i class='bx bx-buildings bx-sm text-dark'></i>
                <span class="text-dark h4">EVENTI</span> 
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="regist.html">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="login.html">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="login.html"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!--edit form-->
<div class="container rounded bg-white mt-5">
    <div class="row">
    <?php
    //LOOP ON ROWST
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="assets/img/<?=$row['image']?>" width="90"><span class="font-weight-bold"><?=$row['name']?></span><span class="text-black-50"><?=$row['role']?></span></div>
        </div>
        <?php
    }?>
   <form>
   <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
    
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <a class="text-decoration-none text-light py-1" href="index.html"><h5> Back to home</h5></a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="first name" value="name" name ="name"></div>
                    <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="Last name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="role"value="role" name ="role"></div>
                    <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="Phone number"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="address" value=""></div>
                    <div class="col-md-6"><input type="text" class="form-control" value="" placeholder="Country"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><h5>Change profile picture</h5><input type="file" id="image" name="image" ></div>
                </div>
                <div class="mt-5 text-right"><button class="btn profile-button" type="sibmit" name="sibmit" >edit Profile</button></div>
            </div>
        </div>
   </form>
        
    </div>
</div>
</body>
</html>