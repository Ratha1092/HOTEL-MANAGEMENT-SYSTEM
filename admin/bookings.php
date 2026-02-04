
<?php
include("layout/header.php");
include("../config/db.php");
$res = mysqli_query($conn,"SELECT b.*, r.room_type FROM bookings b JOIN rooms r ON b.room_id=r.id");
?>

<h4>Manage Bookings</h4>
<table class="table table-hover">
<tr>
  <th>ID</th>
  <th>Room</th>
  <th>Status</th>
  <th>Action</th>
</tr>
<?php while($b=mysqli_fetch_assoc($res)) { ?>
<tr>
  <td><?php echo $b['id']; ?></td>
  <td><?php echo $b['room_type']; ?></td>
  <td>
    <span class="badge bg-<?php echo $b['status']=='paid'?'success':($b['status']=='pending'?'warning':'secondary'); ?>">
      <?php echo ucfirst($b['status']); ?>
    </span>
  </td>
  <td>
    <a href="update_booking.php?id=<?php echo $b['id']; ?>&s=confirmed" class="btn btn-sm btn-primary">Confirm</a>
    <a href="update_booking.php?id=<?php echo $b['id']; ?>&s=paid" class="btn btn-sm btn-success">Paid</a>
    <a href="update_booking.php?id=<?php echo $b['id']; ?>&s=cancelled" class="btn btn-sm btn-danger">Cancel</a>
  </td>
</tr>
<?php } ?>
</table>

<?php include("layout/footer.php"); ?>
