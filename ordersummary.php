<?php
session_start();

$num_sticks = isset($_POST["drumstick"]) && is_numeric($_POST["drumstick"]) ? (float)$_POST["drumstick"] : 0;
$num_pack = isset($_POST["drumhead"]) && is_numeric($_POST["drumhead"]) ? (float)$_POST["drumhead"] : 0;
$num_set = isset($_POST["drumset"]) && is_numeric($_POST["drumset"]) ? (float)$_POST["drumset"] : 0;

$sticks = $num_sticks * 19.99;
$pack = $num_pack * 139.99;
$set = $num_set * 8999.99;
$subtotal = $set + $sticks + $pack;

$_SESSION['subtotal'] = $subtotal;
?>


<!doctype html>
<html>
    <head>
        <title>Order Summary</title>
    </head>
    <body>
        <h1><b>Order Summary</h1>
        <hr>
        <br>

        <?php
        echo "Your subtotal is \$$subtotal";
        ?>
        <br>

        <form action="tax.php" method="post">
            <br><input type="submit" value="Confirm">

        </form>



    </body>
</html>