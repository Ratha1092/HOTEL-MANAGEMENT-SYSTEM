
<?php
include("layout/header.php");
include("../config/db.php");

$rooms = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) total FROM rooms"))['total'];
$bookings = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) total FROM bookings"))['total'];
$pending = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) total FROM bookings WHERE status='pending'"))['total'];
$paid = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) total FROM bookings WHERE status='paid'"))['total'];
?>

<div class="row">
  <div class="col-md-3">
    <div class="card shadow-sm">
      <div class="card-body">
        <h6>Total Rooms</h6>
        <h3><?php echo $rooms; ?></h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm">
      <div class="card-body">
        <h6>Total Bookings</h6>
        <h3><?php echo $bookings; ?></h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm">
      <div class="card-body">
        <h6>Pending</h6>
        <h3><?php echo $pending; ?></h3>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card shadow-sm">
      <div class="card-body">
        <h6>Paid</h6>
        <h3><?php echo $paid; ?></h3>
      </div>
    </div>
  </div>
</div>

<h4 class="mt-4">Recent Bookings</h4>
<table class="table table-striped">
<tr>
  <th>ID</th>
  <th>Room</th>
  <th>Status</th>
</tr>
<?php
$res = mysqli_query($conn,"SELECT b.id, b.status, r.room_type FROM bookings b JOIN rooms r ON b.room_id=r.id ORDER BY b.id DESC LIMIT 5");
while($b=mysqli_fetch_assoc($res)) {
?>
<tr>
  <td><?php echo $b['id']; ?></td>
  <td><?php echo $b['room_type']; ?></td>
  <td>
    <span class="badge bg-<?php echo $b['status']=='paid'?'success':($b['status']=='pending'?'warning':'secondary'); ?>">
      <?php echo ucfirst($b['status']); ?>
    </span>
  </td>
</tr>
<?php } ?>
</table>

<?php include("layout/footer.php"); ?>
