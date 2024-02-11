<?php

$quantity = $name = $email = $phone = $address = $b_address = "";
$quantityError = $nameError = $emailError = $phoneError = $addressError = $b_addressError = "";

if (isset($_REQUEST['submit'])) {
    if (!empty($_REQUEST['quantity'])) {
        $quantity = $_REQUEST['quantity'];
    } else {
        $quantityError = "Enter quantity";
    }

    if (!empty($_REQUEST['fname'])) {
        $name = $_REQUEST['fname'];
    } else {
        $nameError = "Enter Full Name";
    }

    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_REQUEST["email"])) {
        $email = $_REQUEST['email'];
    } else {
        $emailError = "Enter a valid email address";
    }

    if (!empty($_REQUEST['phone'])) {
        $phone = $_REQUEST['phone'];
    } else {
        $phoneError = "Enter phone number";
    }

    if (!empty($_REQUEST['address'])) {
        $address = $_REQUEST['address'];
    } else {
        $addressError = "Enter address";
    }

    if (!empty($_REQUEST['b_address'])) {
        $b_address = $_REQUEST['b_address'];
    } else {
        $b_addressError = "Enter billing address";
    }
}
