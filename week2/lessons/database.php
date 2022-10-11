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

    // Preparing Query
    $statement = $pdo->prepare("SELECT * FROM `users`"); // takes a string SQL as parameter and put as object

    // Execute a Query
    $statement->execute();

    // Access the result query = returns data as an associative array
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    $rowsAffected = $statement->rowCount(); // number of rows affected

    // Secure Database access with Prepared Statements
    $statement = $pdo->prepare("SELECT * FROM `users` WHERE `username`='Phil'");
    // From Web Search
    $statement = $pdo->prepare("SELECT * FROM `users` WHERE `username`='${$_POST['username']}");

?>