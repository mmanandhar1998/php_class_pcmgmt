<?php
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>

    <h1>Welcome, <?php echo ($_SESSION["username"]); ?></h1>
    <!-- <a href="logout.php">Logout</a> -->
    <button onclick="document.location='logout.php'"> Logout</button>
</body>

</html>