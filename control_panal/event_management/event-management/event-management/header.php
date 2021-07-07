<?php  session_start();   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Home </a> <br>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="registration.php">rigstration </a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="login.php">login </a><br>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="home.php">cart </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="phpsendmail/index.php">complain </a>
      </li>
    </ul>
    <div>
      <?php   
        $count=0;
        if(isset($_SESSION['cart'])){
          $count= count($_SESSION['cart']);
        }
      
      ?>
      <a href="mycard.php" class="btn btn-outline-success"> MY CART (<?php echo $count;?>)</a>
    </div>

  </div>
</nav>

</body>
</html>