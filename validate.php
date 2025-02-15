<?php

session_start();

function validateCard($card_number) {
    if (preg_match('/^5[1-5][0-9]{14}$/', $card_number)) {
        $_SESSION['card_used'] = "Mastercard";
        return true;
    }
    if (preg_match('/^4[0-9]{12}(?:[0-9]{3})?$/', $card_number)) {
        $_SESSION['card_used'] = "VISA"; // 
        return true;
    }
    if (preg_match('/^3[47][0-9]{13}$/', $card_number)) {
        $_SESSION['card_used'] = "American Express";
        return true;
    }
    return false;
}

?>
