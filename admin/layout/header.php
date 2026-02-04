
<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: auth/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<style>
body { background:#f4f6f9; }
.sidebar {
  width:240px;
  position:fixed;
  top:0; bottom:0; left:0;
  background:#212529;
  padding-top:60px;
}
.sidebar a {
  color:#adb5bd;
  display:block;
  padding:12px 20px;
  text-decoration:none;
}
.sidebar a:hover {
  background:#343a40;
  color:#fff;
}
.content {
  margin-left:240px;
  padding:20px;
}
.navbar {
  position:fixed;
  left:240px;
  right:0;
  top:0;
  z-index:1000;
}
</style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand">Hotel Admin</span>
    <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
  </div>
</nav>
<div class="sidebar">
  <a href="dashboard.php"><i class="fa fa-chart-line"></i> Dashboard</a>
  <a href="bookings.php"><i class="fa fa-book"></i> Bookings</a>
</div>
<div class="content pt-5">
