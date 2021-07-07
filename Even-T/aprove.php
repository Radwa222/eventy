<html>
<head>
  <title>Even-T</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Load Require CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
</head>

<body>
<?php
$role = '';
$utype ='';
if ($role == 'admin'  || $role == 'admin') {
    $utype = 'on';
}
 
       //conn
       $conn = mysqli_connect("localhost","root","","db_event_management");
       if (!$conn) {
           echo mysqli_connect_error();
           exit;
       }
      
       //select all
       $query = "SELECT * FROM `cart`";
       //search
       if(isset($_GET['search'])){
        $search=mysqli_escape_string($conn,$_GET['search']);
        $query .=" WHERE `cart`.`name` LIKE'%" .$search."%' OR `cart`.`role` LIKE '%".$search. "%'";
    }
     $result = mysqli_query($conn,$query);
     $role="";
       mysqli_close($conn);
?>
<div class="container py-5">
  <h2 class="text-center mb-4">Event Booking Details</h2>        
  <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>id</th>
          <th>Name</th>
          <th>role</th>         
          <th>Statues</th>
          <?php #if($utype == 'on') { ?>
          <th>Action</th>
          <?php# } ?>
        </tr>
        </thead>
        <?php
      $idx = 1;
      foreach ($result as $rec) {
          extract($rec);
          $stat = '';
          if ($statues == "PENDING"  ) {
              $stat = 'warning';
          } elseif ($statues == "APPROVED") {
              $stat = 'success';
          } elseif ($statues == "DENIED") {
              $stat = 'danger';
          } ?>
        <tbody>
        <tr>
          <td><?php echo $idx++; ?></td>
          <td><?php echo $id; ?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $role; ?></td>
          <td class="text-warning"><?php if($statues==0) echo 'pending'; ?></td>
          <td class="text-success"><?php if($statues==1) echo 'aproved'; ?></td>
          <td class="text-danger"><?php if($statues==3) echo 'rejected'; ?></td>
          <td>
          </td>
          <td>
           <?php // we need code to show it when admin only login ?> 
           <?php  ?>
             <?php #if ($statues == "PENDING" && $utype == 'on' ) {?>
             <td><a class="btn btn-success border-0" href="aprovesp.php?id=<?=$rec['id']?>">aprove</a> |
              <a class="btn btn-danger border-0 " href ="rejectsp.php?id=<?=$rec['id']?>">reject</a>|
              <a class="btn btn-warning border-0 " href ="deletesp.php?id=<?=$rec['id']?>">delete</a>
               </td>

          </td>
           <?php #}?>
          <?php ?>
         
        </tr>
        </tbody>
        <?php
      } ?>
     </table>
</div>
</div>

</html>
</body>























    <!-- /.box-body -->
    <div class="box-footer clearfix">
      <!--
	<ul class="pagination pagination-sm no-margin pull-right">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
	-->
    </div>
  </div>
  <!-- /.box -->
</div>
