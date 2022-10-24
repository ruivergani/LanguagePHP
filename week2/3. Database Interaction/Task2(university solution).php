<?php

$db = new PDO('mysql:host=localhost;dbname=db_interaction', 'root', '') or die('Unable to connect to the database');

$students = $db->query('select * from students')->fetchAll(PDO::FETCH_CLASS);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <caption>All students</caption>
    <thead>
    <tr>
        <th>Forename</th>
        <th>Surname</th>
        <th>Address</th>
        <th>Telephone</th>
        <th>Date of Birth</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $student): ?>
    <tr>
        <td><?= $student->forename ?></td>
        <td><?= $student->surname ?></td>
        <td><?= $student->address ?></td>
        <td><?= $student->telephone ?></td>
        <td><?= $student->date_of_birth ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
