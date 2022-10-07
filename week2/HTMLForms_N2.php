<?php
    $modules = $_POST['module'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP, HTML and Forms</title>
</head>
<body>

<h1>Module Registration</h1>

<form method="post">
    <fieldset>
        <legend>Module Details</legend>

        <div>
            <label for="module1">Module 1:</label>
            <input type="text" id="module1" name="module[]">
        </div>

        <div>
            <label for="module2">Module 2:</label>
            <input type="text" id="module2" name="module[]">
        </div>

        <div>
            <label for="module3">Module 3:</label>
            <input type="text" id="module3" name="module[]">
        </div>

        <div>
            <input type="submit" name="submit" value="Submit">
        </div>

    </fieldset>
</form>

<p>
    <?= $modules[1]; ?>
</p>

</body>
</html>