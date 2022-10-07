<?php
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

<?php if ($parity == "odd") { ?>
    <p style="color:red">
        <?= "{$_GET['num']} is {$parity}"; ?>
    </p>
<?php } else { ?>
    <p style="color:green">
        <?= "{$_GET['num']} is {$parity}"; ?>
    </p>
<?php } ?>

</body>
</html>