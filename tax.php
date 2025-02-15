<?php
session_start();
$tax_rate = 0.045;
$_SESSION['tax'] = $_SESSION['subtotal'] * $tax_rate;
$_SESSION['total'] = $_SESSION['subtotal'] + $_SESSION['tax'];
?>
<!doctype html>
<html>
    <head>
        <title>Tax Calculation</title>
    </head>
    <body>
        <h1>Tax Calculation</h1>
        <hr>
        <br>
        <b> Subtotal: $<?php echo number_format($_SESSION['subtotal'], 2); ?><br>
            <br>
            <b> Tax: $<?php echo number_format($_SESSION['tax'], 2); ?><br>
                <br>
                <b>Total: $<?php echo number_format($_SESSION['total'], 2); ?><br>
                    <br>
                    <form action="login.php" method="post">
                        <input type="submit" value="Checkout"> or  <button><a href="index.php">Return to Shop</a></button>
                    </form>
                    </body>
                    </html>
