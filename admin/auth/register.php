
<?php
include("../../config/db.php");
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users (first_name,last_name,email,password,role)
    VALUES ('$first','$last','$email','$password','admin')");

    $success = "Admin registered successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { background:#f4f6f9; }
.register-card { max-width:450px; margin:auto; margin-top:8%; }
</style>
</head>
<body>
<div class="card shadow register-card">
  <div class="card-body">
    <h4 class="text-center mb-4">Admin Register</h4>
    <?php if($success): ?><div class="alert alert-success"><?= $success ?></div><?php endif; ?>
    <form method="POST">
      <div class="mb-2"><input name="first_name" class="form-control" placeholder="First Name" required></div>
      <div class="mb-2"><input name="last_name" class="form-control" placeholder="Last Name" required></div>
      <div class="mb-2"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
      <div class="mb-3"><input type="password" name="password" class="form-control" placeholder="Password" required></div>
      <button class="btn btn-success w-100">Register</button>
    </form>
  </div>
</div>
</body>
</html>
