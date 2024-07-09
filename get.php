<!DOCTYPE html>
<html>

<body>

    <form method="GET">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // collect value of input field
        $name = $_GET['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

</body>

</html>