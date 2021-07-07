<?php
   session_start();
   $conection= mysqli_connect("localhost","root","","test5") 





?>

<html>
    <head>
        <title>amazonaa</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br>
        <div class="container" style="width:700px;">
            <h3 align="center"> shopping card</h3>
            <?php $query= "SELECT * FROM product ORDER BY  id ASC";
            $result=mysqli_query($conection,$query);
            if (mysqli_num_rows($result) > 0){
                while($row=mysqli_fetch_assoc($result))
                {
             ?>
             <div class="col-md-4">
                 <form >

                 </form>
             </div>
             <?php       
                }
            }
            ?>
        </div>
    </body>




</html>