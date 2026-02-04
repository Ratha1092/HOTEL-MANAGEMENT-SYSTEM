
<?php
include("../../config/db.php");
$room_id = $_GET['room_id'] ?? 1;
$room = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM rooms WHERE id=$room_id"));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirm Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="section-title mb-4">Confirm Booking</h2>

    <div class="row">
        <!-- LEFT -->
        <div class="col-md-7">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5>Guest Information</h5>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-3"><input class="form-control" placeholder="First Name"></div>
                        <div class="col-md-6 mb-3"><input class="form-control" placeholder="Last Name"></div>
                        <div class="col-md-6 mb-3"><input class="form-control" placeholder="Email"></div>
                        <div class="col-md-6 mb-3"><input class="form-control" placeholder="Phone"></div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Payment Information</h5>
                    <div class="row mt-3">
                        <div class="col-md-12 mb-3"><input class="form-control" placeholder="Card Number"></div>
                        <div class="col-md-6 mb-3"><input class="form-control" placeholder="Expiry"></div>
                        <div class="col-md-6 mb-3"><input class="form-control" placeholder="CVV"></div>
                    </div>
                    <button class="btn btn-dark mt-3 w-100">Confirm & Pay</button>
                </div>
            </div>
        </div>

        <!-- RIGHT -->
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Your Booking</h5>
                    <p class="mt-3"><strong><?php echo $room['room_type']; ?></strong></p>
                    <p>$<?php echo $room['price_per_night']; ?> / night</p>
                    <hr>
                    <p>Total: <strong>$<?php echo $room['price_per_night']; ?></strong></p>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>
