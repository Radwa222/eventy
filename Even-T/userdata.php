<?php
    

        $category=strval(explode("=",$_SERVER['QUERY_STRING'])[1]);
        $Quary="SELECT * FROM `tbl_users`  WHERE spid='".$category."'";
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
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
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
    
    <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

            <!-- Start Recent Work -->
            <?php
   //LOOP ON ROWST
   while ($row = mysqli_fetch_assoc($result)) {
       ?>
               
    <section class="py-5">
        <div class="container">
            <div class="row gy-5 g-lg-5">
                    <div class="col-sm-4 mb-3">
                        <div class="card text-center" style="height:600px">
                            <div class="text-center">
                            <img class="rounded-circle " src="assets/img/<?=$row['image']?>" alt="Card image" style="width:70%">
                            </div>
                            <div class="card-body">
                            <h4 class="card-title"><?=$row['name']?></h4>
                            <p class="card-text"><?=$row['info']?></p> 
                           <h5>price range: 2000-3000 </h5>
                           <a href="./ecommerce/index.php" class="btn rounded-pill mb-lg-3 px-lg-4 light-300 my-3">book now</a>
                          </div>
                          </div>    
                    </div>

                    <div class="col-sm-8 mb-3">
                        <div id="demo" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                              <li data-target="#demo" data-slide-to="0" class="active"></li>
                              <li data-target="#demo" data-slide-to="1"></li>
                              <li data-target="#demo" data-slide-to="2"></li>
                        
                            </ul>
                            
                            <!-- The slideshow -->
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="assets/img/test.jpg" alt="Los Angeles" width="800" height="600">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/img/test2.jpg" alt="Chicago" width="800" height="600">
                              </div>
                            </div>
                            
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                              <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo" data-slide="next">
                              <span class="carousel-control-next-icon"></span>
                            </a>
                          </div>
                    </div>
            </div>
        </div>
</section>
          
            <!-- End Recent Work -->
<?php }?>            
    
    <!-- End Service -->
</body>
</html>

        