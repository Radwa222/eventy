<?php include("header.php"); 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phonzo</title>
</head>
<body>
 

 <div class="container mt-5">
       <div class="row">
          <?php #1 card ?>
            <div class="col-lg-3">
             <form action="manage_card.php" method="POST" >
                  <div class="card" >
                      <img src="images/honor.jpg" class="card-img-top" alt="honor">
                      <div class="card-body text-center">
                          <h5 class="card-title">honor 9x</h5>
                           <p class="card-text">wonderfor phone from honor with some futers</p>
                           <p class="card-text2">price:3560</p>
                           <button type="submit" name="add_to_cart" class="btn btn-info"> Add to cart </button>
                           <input type="hidden"  name="Item_name" value="honor9x" >
                           <input type="hidden"  name="price" value="3560" >
                      </div>  
                 </div>  
              </form>
         </div>
         <?php #2 card?>
         <div class="col-lg-3">
             <form action="manage_card.php" method="POST">
                  <div class="card" >
                      <img src="images/s22.jpg" class="card-img-top" alt="honor">
                      <div class="card-body text-center">
                          <h5 class="card-title">samsong ultra21</h5>
                           <p class="card-text">wonderfor phone from samsong with good cams</p>
                           <p class="card-text2">price:21000</p>
                           <button type="submit"  name="add_to_cart" class="btn btn-info"> Add to cart </button>
                           <input type="hidden"  name="Item_name" value="samsongultra21" >
                           <input type="hidden"  name="price" value="21000" >
                      </div>  
                 </div>  
              </form>
         </div>
         <?php #3 card?>
         <div class="col-lg-3">
             <form action="manage_card.php" method="POST">
                  <div class="card" >
                      <img src="images/nova7i.jpg" class="card-img-top" alt="honor">
                      <div class="card-body text-center">
                          <h5 class="card-title">nova7i</h5>
                           <p class="card-text">wonderfor phone from huwaia with good cams</p>
                           <p class="card-text2">price:5000</p>
                           <button type="submit"  name="add_to_cart" class="btn btn-info"> Add to cart </button>
                           <input type="hidden"  name="Item_name" value="nova7i" >
                           <input type="hidden"  name="price" value="50000" >
                      </div>  
                 </div>  
              </form>
         </div>
         <?php #4 card?>
         <div class="col-lg-3">
             <form action="manage_card.php" method="POST">
                  <div class="card" >
                      <img src="images/huawei44.jpg" class="card-img-top" alt="honor">
                      <div class="card-body text-center">
                          <h5 class="card-title">huawei met 40p</h5>
                           <p class="card-text">wonderfor phone from huwaia with good cams</p>
                           <p class="card-text2">price:8000</p>
                           <button type="submit"  name="add_to_cart" class="btn btn-info"> Add to cart </button>
                           <input type="hidden"  name="Item_name" value="huawei met 40p" >
                           <input type="hidden"  name="price" value="80000" >
                      </div>  
                 </div>  
              </form>
         </div>
     </div> 
 </div>
    
</body>
</html>