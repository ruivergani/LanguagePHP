<?php
    $header1 = 'Task1';
    $title = 'PHP Output in HTML';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "${title}"; ?></title>
</head>
<body>
    <!-- Dynamic output content -->
    <h1><?= "{$header1}"; ?></h1>
</body>
</html>