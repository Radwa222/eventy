<?php include("header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.css" rel="stylesheet"
          type="text/css" />
     <script src="<?php echo WEB_ROOT; ?>library/spry/textfieldvalidation/SpryValidationTextField.js"
          type="text/javascript"></script>

     <link href="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.css" rel="stylesheet"
          type="text/css" />
     <script src="<?php echo WEB_ROOT; ?>library/spry/textareavalidation/SpryValidationTextarea.js"
          type="text/javascript"></script>

     <link href="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.css" rel="stylesheet"
          type="text/css" />
     <script src="<?php echo WEB_ROOT; ?>library/spry/selectvalidation/SpryValidationSelect.js" type="text/javascript">
     </script>
     <title>Even-T</title>
</head>

<body>



     <div class="container mt-5">
          <div class="row">
               <?php #1 card?>
               <div class="col-lg-3">
                    <form action="manage_card.php" method="POST">
                         <div class="card">
                              <img src="images/skrillex.jpg" class="card-img-top" alt="honor">
                              <div class="card-body text-center">
                                   <h5 class="card-title">skrillex</h5>
                                   <p class="card-text">Sonny John Moore (born January 15, 1988), known professionally
                                        as Skrillex, is an American DJ</p>
                                   <p class="card-text2">price:6000</p>
                                   <div class="col-xs-6">
                                        <label>Reservation Date</label>
                                        <span id="sprytf_rdate">
                                             <input type="text" name="rdate" class="form-control"
                                                  placeholder="YYYY-mm-dd">
                                             <?php #<span class="textfieldRequiredMsg">Date is required.</span>?>

                                        </span>
                                   </div>
                                   <div class="col-xs-6">
                                        <label>Reservation Time</label>
                                        <span id="sprytf_rtime">
                                             <input type="text" name="rtime" class="form-control" placeholder="HH:mm">

                                        </span>
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputPassword1">No of Peoples</label>
                                        <span id="sprytf_ucount">
                                             <input type="text" name="ucount" class="form-control input-sm"
                                                  placeholder="No of peoples">
                                        </span>

                                   </div>
                                   <button type="submit" name="add_to_cart" class="btn btn-info"> Add to cart </button>
                                   <input type="hidden" name="Item_name" value="skrillex">
                                   <input type="hidden" name="price" value="6000">
                                   <input type="hidden" name="rdate" value=<?php  ?>>
                                   <input type="hidden" name="rtime" value=<?php ?> <input type="hidden" name="ucount"
                                        value="">

                              </div>
                         </div>
                    </form>
               </div>
               <?php #2 card?>
               <div class="col-lg-3">
                    <form action="manage_card.php" method="POST">
                         <div class="card">
                              <img src="images/dina.jpg" class="card-img-top" alt="honor">
                              <br>
                              <br>
                              <div class="card-body text-center">
                                   <h5 class="card-title">dina iskander team</h5>

                                   <p class="card-text">Dina Iskandar offers couples who do not know how to prepare for
                                        marriage or do not have enough time to pay attention to details, the best
                                        solutions</p>
                                   <p class="card-text2">price:10000</p>
                                   <div class="col-xs-6">
                                        <label>Reservation Date</label>
                                        <span id="sprytf_rdate">
                                             <input type="text" name="rdate" class="form-control"
                                                  placeholder="YYYY-mm-dd">
                                        </span>
                                   </div>
                                   <div class="col-xs-6">
                                        <label>Reservation Time</label>
                                        <span id="sprytf_rtime">
                                             <input type="text" name="rtime" class="form-control" placeholder="HH:mm">

                                        </span>
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputPassword1">No of Peoples</label>
                                        <span id="sprytf_ucount">
                                             <input type="text" name="ucount" class="form-control input-sm"
                                                  placeholder="No of peoples">
                                        </span>

                                   </div>
                                   <button type="submit" name="add_to_cart" class="btn btn-info"> Add to cart </button>
                                   <input type="hidden" name="Item_name" value="samsongultra21">
                                   <input type="hidden" name="price" value="21000">
                              </div>
                         </div>
                    </form>
               </div>
               <?php #3 card?>
               <div class="col-lg-3">
                    <form action="manage_card.php" method="POST">
                         <div class="card">
                              <img src="images/aya.jpg" class="card-img-top" alt="honor">
                              <div class="card-body text-center">
                                   <h5 class="card-title">Aya salem</h5>
                                   <p class="card-text">Your happiness according to your budget Also, unconventional, we
                                        organize meticulously from A to Z, such as
                                        (Graduation parties - birthdays - weddings - engagement - African zaffa)</p>
                                   <p class="card-text2">price:20000</p>
                                   <div class="col-xs-6">
                                        <label>Reservation Date</label>
                                        <span id="sprytf_rdate">
                                             <input type="text" name="rdate" class="form-control"
                                                  placeholder="YYYY-mm-dd">
                                             < </span> </div> <div class="col-xs-6">
                                                  <label>Reservation Time</label>
                                                  <span id="sprytf_rtime">
                                                       <input type="text" name="rtime" class="form-control"
                                                            placeholder="HH:mm">

                                                  </span>
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputPassword1">No of Peoples</label>
                                        <span id="sprytf_ucount">
                                             <input type="text" name="ucount" class="form-control input-sm"
                                                  placeholder="No of peoples">
                                        </span>

                                   </div>
                                   <button type="submit" name="add_to_cart" class="btn btn-info"> Add to cart </button>
                                   <input type="hidden" name="Item_name" value="samsongultra21">
                                   <input type="hidden" name="price" value="21000">
                              </div>
                         </div>
                    </form>
               </div>
               <?php #4 card?>
               <div class="col-lg-3">
                    <form action="manage_card.php" method="POST">
                         <div class="card">
                              <img src="images/kemo5.jpg" class="card-img-top" alt="honor">
                              <div class="card-body text-center">
                                   <h5 class="card-title">Sayed Abd Algalil</h5>
                                   <p class="card-text">Commercial photographer based in Cairo, Egypt specialized in
                                        Product, Architecture, Interior, Exterior, Hospitality, Food, Industrial,
                                        Jewellery and Corporate Photography</p>
                                   <p class="card-text2">price:21000</p>
                                   <div class="col-xs-6">
                                        <label>Reservation Date</label>
                                        <span id="sprytf_rdate">
                                             <input type="text" name="rdate" class="form-control"
                                                  placeholder="YYYY-mm-dd">
                                        </span>
                                   </div>
                                   <div class="col-xs-6">
                                        <label>Reservation Time</label>
                                        <span id="sprytf_rtime">
                                             <input type="text" name="rtime" class="form-control" placeholder="HH:mm">
                                        </span>
                                   </div>
                                   <div class="form-group">
                                        <label for="exampleInputPassword1">No of Peoples</label>
                                        <span id="sprytf_ucount">
                                             <input type="text" name="ucount" class="form-control input-sm"
                                                  placeholder="No of peoples">

                                        </span>
                                   </div>
                                   <button type="submit" name="add_to_cart" class="btn btn-info"> Add to cart </button>
                                   <input type="hidden" name="Item_name" value="samsongultra21">
                                   <input type="hidden" name="price" value="21000">
                              </div>
                         </div>
                         <script type="text/javascript">
                              var sprytf_rdate = new Spry.Widget.ValidationTextField("sprytf_rdate", "date", {
                                   format: "yyyy-mm-dd",
                                   useCharacterMasking: true,
                                   validateOn: ["blur", "change"]
                              });
                              var sprytf_rtime = new Spry.Widget.ValidationTextField("sprytf_rtime", "time", {
                                   hint: "i.e 20:10",
                                   useCharacterMasking: true,
                                   validateOn: ["blur", "change"]
                              });
                              var sprytf_ucount = new Spry.Widget.ValidationTextField("sprytf_ucount", "integer", {
                                   validateOn: ["blur", "change"]
                              });
                         </script>
                    </form>
               </div>
          </div>
     </div>

</body>

</html>