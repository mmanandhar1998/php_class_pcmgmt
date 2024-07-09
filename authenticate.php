<?php
session_start();
require('database.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username1 = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password == $row["password"]) {
            $_SESSION["username"] = $username1;
            header("location: welcome.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "Username not found";
    }
}
$conn->close();

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