
<?php include("../config/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Rooms & Suites</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="section-title">Rooms & Suites</h2>
    <p class="mb-4">Discover comfort and elegance in every room.</p>

    <div class="row">
        <?php
        $rooms = mysqli_query($conn, "SELECT * FROM rooms");
        while($r = mysqli_fetch_assoc($rooms)) {
        ?>
        <div class="col-md-4 mb-4">
            <div class="room-card card">
                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39" class="img-fluid">
                <div class="card-body">
                    <h5><?php echo $r['room_type']; ?></h5>
                    <p><?php echo $r['description']; ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>$<?php echo $r['price_per_night']; ?> / night</strong>
                        <a href="room.php?id=<?php echo $r['id']; ?>" class="btn btn-dark btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

</body>
</html>
