<?php

// using file_get_contents

// Sample example to get data. Get response status code

// set_opt_array

//

// Get users
$url = 'https://jsonplaceholder.typicode.com/users';
$resource = curl_init($url);
// Or
//curl_setopt($resource, CURLOPT_URL, $url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
$responseCode = curl_getinfo($resource, CURLINFO_HTTP_CODE);
//var_dump($responseCode);
//var_dump(json_decode($result));

// Create User
$user = [
    'name' => 'John Doe',
    'username' => 'john',
    'email' => 'john@example.com'
];

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($user),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-Type: application/json')
]);
$result = curl_exec($ch);
curl_close($ch);
var_dump ($result);