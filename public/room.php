
<?php
include("../config/db.php");
$id = $_GET['id'];
$room = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM rooms WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $room['room_type']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-7">
            <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39" class="img-fluid rounded">
        </div>
        <div class="col-md-5">
            <h2><?php echo $room['room_type']; ?></h2>
            <p class="mt-3"><?php echo $room['description']; ?></p>
            <h4 class="mt-4">$<?php echo $room['price_per_night']; ?> / night</h4>
            <a href="booking/confirm.php?room_id=<?php echo $room['id']; ?>" class="btn btn-dark mt-3">Book Now</a>
        </div>
    </div>
</div>

</body>
</html>
