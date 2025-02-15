<html>
    <head>
        <title>Thank You</title>
        </</head>
    <body>
        <h1>Thank You for Your Purchase!</h1>
        <hr>
        <br>
        <?php
        session_start();
        if (isset($_SESSION['card_used'])):
            ?> <h2> Your <?php echo $_SESSION['card_used']; ?> has been processed.</h2>
<?php endif; ?><br>
        <br>
        <button><a href="index.php">Return to Shop</a></button>
    </body>
</html>