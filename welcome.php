<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["id"])) {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome <?php echo $_SESSION["name"]; ?></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="welcome-box">
    <h2>Welcome <?php echo $_SESSION["name"]; ?></h2>
    <p>You have successfully logged in.</p>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>