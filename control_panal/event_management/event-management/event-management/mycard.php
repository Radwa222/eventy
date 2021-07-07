<?php
 include("header.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>
  </head>
  <body>
    <div class="contanier">
      <div class="row">
        <div class="col-lg-12 text-center border border-dark  rounded bg-light my-5 "> <?php #need to edit?>
          <h1>My Cart</h1>
        </div>
      </div>
    </div>

    <div class="col-lg-8">
      <table class="table">
        <thead class="text-center">
          <tr>
            <th scope="col">serial no.</th>
            <th scope="col">item name</th>
            <th scope="col">item price</th>
            <th scope="col">quaintity</th>
            <th scope="col">date</th>
            <th scope="col">time</th>
            <th scope="col">action</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php
            $total=0;          
            if(isset($_SESSION['cart']))
            {
              foreach($_SESSION['cart']as $key => $value){
                $siralNm=$key+1;
                $total=$total+$value['price'];
                echo"
                  <tr>
                     <td>$siralNm</td>
                     <td>$value[Item_name]</td>
                     <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'</td>
                     <td><input class= 'text-center iQuantity'  type='number' value='$value[Quantity]' min='1' max='10'</td>
                     <td>$value[rdate]<input type='hidden' class='idate' value='$value[rdate]'</td>
                     <td>$value[rtime]<input type='hidden' class='itime' value='$value[rtime]</td>
                     <td class='itotal'></td>
                     
                       <form action='manage_card.php' method='POST'>
                       <td><button name='Remove_Item' class='btn btn-outline-danger'>REMOVE</td>
                       <input type='hidden' name='Item_name' value='$value[Item_name]'>
                     </form>
                 </tr>
                ";
              }
            }
         
          
          ?>
        </tbody>
      </table>
    </div>

    <div class="col-lg-4 ">
      <div class="border bg-light rounded p-4">
      <h3>total:</h3>
      <h5 class="text-right"><?php echo $total; ?></h5>
      <form>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
          <label class="form-check-label" for="flexRadioDefault1">
          chas on site 
          </label>
      </div>
       <button class="btn btn-primary btn-block" >Make Purchase</button>
      </form>

      </div>
    </div>
<script>
      
      
  var iprice=document.getElementByClassName('iprice');
  var iQuantity=document.getElementByClassName('iQuantity');
  var itotal=document.getElementByClassName('itotal');
  var itotal=document.getElementByClassName('rdate');
  var itotal=document.getElementByClassName('rtime');
 
  function subtotal()
  {
    for(i=0;i<iprice.length;i++)
    {
       itotal[i].innertext=(iprice[i].value)*(iQuantity[i].value);
  
    }
        
  }
  
  subtotal(); 

</script>

</body>
</html>
