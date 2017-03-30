<?php

$token = $_POST['stripeToken'];

$email = $_POST['email'];

$name = $_POST['name'];


if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($token)) {
    require('stripe.php');
    $stripe = new Stripe('sk_test_51RktZrgW3bG1QPtiO9IP4a3');
    $customer = $stripe('customers', [
        'source' => $token,
        'description' => $name,
        'email' => $email
    ]);
    var_dump($customer);
    die();
}