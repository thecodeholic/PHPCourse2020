<?php

$server = 'localhost';
$username = 'root';
$password = '';
$products = [];
try {
    $conn = new PDO("mysql:host=$server;dbname=products", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare("SELECT * FROM products");
    $statement->execute();

    $products = $statement->fetchAll();

    var_dump($products);


} catch (PDOException $e) {
    echo $e->getMessage();
}

