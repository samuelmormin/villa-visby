<?php

$token = $_POST['stripeToken'];

$email = $_POST['email'];

$name = $_POST['name'];

if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($token)) {
    $ch = curl_init();
    
    $data = [
        'source' => $token,
        'description' => $name,
        'email' => $email
    ];
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://api.stripe.com/v1/customers',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERPWD => 'sk_test_51RktZrgW3bG1QPtiO9IP4a3',
        CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
        CURLOPT_POSTFIELDS => http_build_query($data)
        ]);
    $response = json_decode(curl_exec($ch));
    curl_close($ch);
    var_dump($response);
    die();
}