
<!DOCTYPE html>
<html>
<head>
    <title>Hotel Cambodiana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h1>Chase elegance.<br>Reserve your dream stay now.</h1>
        <p class="mt-3">Luxury hotel experience in the heart of Phnom Penh</p>
    </div>
</section>

<!-- BOOKING BAR -->
<div class="container booking-bar">
    <div class="row g-3">
        <div class="col-md-3">
            <input type="date" class="form-control">
        </div>
        <div class="col-md-3">
            <input type="date" class="form-control">
        </div>
        <div class="col-md-3">
            <select class="form-control">
                <option>1 Room, 2 Adults</option>
            </select>
        </div>
        <div class="col-md-3 d-grid">
            <a href="rooms.php" class="btn btn-dark">Search</a>
        </div>
    </div>
</div>

<!-- ROOMS -->
<div class="container mt-5">
    <h3 class="section-title">Rooms & Suites</h3>
    <div class="row">
        <div class="col-md-4">
            <div class="room-card card">
                <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39" class="img-fluid">
                <div class="card-body">
                    <h5>Deluxe Room</h5>
                    <p>From $2024 / night</p>
                    <a href="rooms.php" class="btn btn-outline-dark btn-sm">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Hotel Cambodiana</h5>
                <p>Luxury by the Mekong River</p>
            </div>
            <div class="col-md-4">
                <h6>Explore</h6>
                <a href="#">Rooms</a><br>
                <a href="#">Dining</a><br>
                <a href="#">Spa</a>
            </div>
            <div class="col-md-4">
                <h6>Contact</h6>
                <p>Phnom Penh, Cambodia</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
