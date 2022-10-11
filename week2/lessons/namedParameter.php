<?php

$dsn = 'mysql:host=localhost;dbname=test';
$username = 'test';
$password = 'test';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);

    $statement = $pdo->prepare(
        "SELECT * FROM `users` WHERE `username` = :username"
    );
    $statement->bindParam(':field', $_POST['username']);
    $statement->execute();

} catch (PDOException $e) {
    die('There was a problem with your database interaction');
}

?>