<?php
session_start();
$total = $_SESSION['total'];
?>



<!doctype html>
<html>
    <head>
        <title>Checkout</title>
    </head>


    <body>
        <h1>Checkout</h1>
        <hr>
        <br>
        <h2>Total: $<?php echo number_format($total, 2); ?></h2><br>
        <br>

        <form action="confirmcc.php" method="post">
            <b>  Name on Card: <input type="text" name="name"><br>
                <br>
                Card Number: <input type="text" name="card_number"><br>
                <br>
                Expiration Date(MM/YY): <input type="text" name="date"><br>
                <br>
                Security Code: <input type="text" name="code"><br>
            </b>
            <br>




            <input type="submit" value="Pay Now">
        </form>
    </body>
</html>

