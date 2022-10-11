<?php
    // Connection with Database
    $dsn = 'mysql:host=localhost;dbname=test';
    $username = 'root';
    $password = '';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ];

    try {
        $pdo = new PDO($dsn, $username, $password, $options);
        echo "Connection Successful";
    } catch (PDOException $e) {
        die('Could not connect');
    }

?>