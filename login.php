<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php include 'navbar.php' ?><br><br>
    <form action="/authenticate.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name"><br>
        <label for="email">Email:</label>
        <input type="text" name="email"><br>
        <label for="name">Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="login">


    </form>

</body>

</html>