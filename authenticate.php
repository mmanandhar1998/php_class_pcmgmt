<?php
session_start();

$correct_username = "admin";
$correct_email = "abc@gmail.com";
$correct_password = "Admin@123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["name"]) ? $_POST["name"] : null;
    $email = isset($_POST["email"]) ? $_POST["email"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;

    if ($username === $correct_username && $email === $correct_email && $password === $correct_password) {
        // Set session variables
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $correct_username;

        // Redirect to welcome page
        header("Location: welcome.php");
        exit();
    } else {
        echo "Incorrect username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br><br><br>
    <a href="login.php" type="button">Back</a>
</body>

</html>