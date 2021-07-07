<?php
  $category=strval(explode("=",$_SERVER['QUERY_STRING'])[1]);
  $Quary="SELECT * FROM `cart`  WHERE role='".$category."'";
 $db=mysqli_connect('localhost','root','','db_event_management'); 
 $result=mysqli_query($db,$Quary);
  mysqli_close($db);

    
      

?>
<?php
##get id category
##?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>EVENTI</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="work.html">Services</a>
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
                    <a class="nav-link" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>


            <!-- Start Recent Work -->
            <?php
   //LOOP ON ROWST
   while ($row = mysqli_fetch_assoc($result)) {
       ?>
     <section class="py-5 mb-5">
                       <div class="col-md-4 col-sm-6 mb-3 ">
                           <div class="card" style="width:300px" >
                              <img class="card-img card-img-top" src="./assets/img/<?=$row['avatar']?>" alt="Card image" style="width:100%">
                              <h4 class="card-title"><?=$row['name']?></h4>
                              <h4 class="card-title"><?=$row['info']?></h4>
                               <a href="serviceproviderdata.php?serviceproviderId=<?=$row['spid']?>" class="btn rounded-pill mb-lg-3 px-lg-4 light-300 my-3">view Profile</a>
                               <a href="cart.php" class="btn rounded-pill mb-lg-3 px-lg-4 light-300 my-3">cart</a>
                          </div>
                     </div>
              
         </section>
            <!-- End Recent Work -->
<?php }?>

</body>
</html>
