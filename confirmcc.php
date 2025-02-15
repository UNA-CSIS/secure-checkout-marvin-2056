<?php

include 'validate.php';
$card_number = $_POST['card_number'];
$validation_result = validateCard($card_number);
if ($validation_result) {
    header('Location: thankyou.php');
    exit();
} else {
    echo "<br><h1>Invalid card number. <a href='checkout.php'>Go back</a></h1>";
}
?>