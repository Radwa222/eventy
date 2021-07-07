<?php
$records = getBookingRecords();
$utype = '';
$type = $_SESSION['calendar_fd_user']['type'];
if ($type == 'admin'  || $type == 'teacher') {
    $utype = 'on';
}
?>
<div class="col-md-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Event Booking Details</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th style="width: 10px">#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Booking Date</th>
          <th style="width: 140px">Number of People</th>
          <th style="width: 100px">Status</th>
          <?php if($utype == 'on') { ?>
          <th>Action</th>
          <?php } ?>
        </tr>
        <?php
      $idx = 1;
      foreach ($records as $rec) {
          extract($rec);
          $stat = '';
          if ($status == "PENDING") {
              $stat = 'warning';
          } elseif ($status == "APPROVED") {
              $stat = 'success';
          } elseif ($status == "DENIED") {
              $stat = 'danger';
          } ?>
        <tr>
          <td><?php echo $idx++; ?></td>
          <td>
            <a
              href="<?php echo WEB_ROOT; ?>views/?v=USER&ID=<?php echo $user_id; ?>"><?php echo strtoupper($user_name); ?></a>
          </td>
          <td><?php echo $user_email; ?></td>
          <td><?php echo $user_phone; ?></td>
          <td><?php echo $res_date; ?></td>
          <td><?php echo $count; ?></td>
          <td>
            <span class="label label-<?php echo $stat; ?>"><?php echo $status; ?></span>
          </td>
          <td>
           <?php // we need code to show it when admin only login ?> 
           <?php  ?>
             <?php if ($status == "PENDING" && $utype == 'on' ) {?>
             <a href="javascript:approve('<?php echo $user_id ?>');">Approve</a>
             <a href="javascript:decline('<?php echo $user_id ?>');">Denied</a>
             <a href="javascript:deleteUser('<?php echo $user_id ?>');">Delete</a>
             <a href="javascript:deleteUser('<?php echo $user_id ?>');">Delete</a>
          </td>
           <?php }?>
          <?php ?>
         
        </tr>
        <?php
      } ?>
      </table>
    </div>
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
      <?php echo generatePagination(); ?>
    </div>
  </div>
  <!-- /.box -->
</div>

<script language="javascript">
  function approve(userId) {
    if (confirm("Are you sure you wants to Approve it ?")) {
      window.location.href =
        "<?php echo WEB_ROOT; ?>api/process.php?cmd=regConfirm&action=approve&userId=" +
        userId;
    }
  }

  function decline(userId) {
    if (confirm("Are you sure you wants to Decline the Booking ?")) {
      window.location.href =
        "<?php echo WEB_ROOT; ?>api/process.php?cmd=regConfirm&action=denide&userId=" +
        userId;
    }
  }

  function deleteUser(userId) {
    if (
      confirm(
        "Deleting user will also delete it's booking from calendar.\n\nAre you sure you want to priceed ?"
      )
    ) {
      window.location.href =
        "<?php echo WEB_ROOT; ?>api/process.php?cmd=delete&userId=" + userId;
    }
  }
</script>