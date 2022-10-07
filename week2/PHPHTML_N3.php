<?php
    // REMEMBER TO POPULATE THE QUERYSTRING ?num=1
    $parity = "even";
    if ($_GET['num'] & 1) {
        $parity = "odd";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dynamic PHP Output</title>
</head>
<body>

<h1>Odd or even</h1>

<p>
    <?= "{$_GET['num']} is {$parity}"; ?>
</p>

</body>
</html>
