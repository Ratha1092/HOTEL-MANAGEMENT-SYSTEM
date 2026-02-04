
<?php
include("../config/db.php");
// demo user_id = 1
$bookings = mysqli_query($conn,"SELECT b.*, r.room_type FROM bookings b JOIN rooms r ON b.room_id=r.id WHERE b.user_id=1");
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="section-title mb-4">My Bookings</h2>

    <table class="table table-hover shadow-sm">
        <thead class="table-light">
            <tr>
                <th>Room</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Status</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        <?php while($b = mysqli_fetch_assoc($bookings)) { ?>
            <tr>
                <td><?php echo $b['room_type']; ?></td>
                <td><?php echo $b['check_in']; ?></td>
                <td><?php echo $b['check_out']; ?></td>
                <td>
                    <span class="badge bg-<?php echo $b['status']=='paid'?'success':($b['status']=='pending'?'warning':'secondary'); ?>">
                        <?php echo ucfirst($b['status']); ?>
                    </span>
                </td>
                <td>$<?php echo $b['total_price']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
