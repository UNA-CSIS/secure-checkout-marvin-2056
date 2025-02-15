<?php


$usr = $_POST["usr"];

$pw = $_POST["pw"];




include 'login.php';

if ($usr == $pw) {
    header('Location: checkout.php');
    exit();
} else {
    header('Location: invalidlogin.php');
    exit();
}
?>