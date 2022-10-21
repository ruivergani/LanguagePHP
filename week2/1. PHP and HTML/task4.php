<?php
    $modules = $_POST['module'];
    sort($modules);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Form Input as an Array</title>
</head>

<body>

<form method="post">
    <fieldset>
        <legend>My Modules this Semester</legend>
        <input type="text" name="module[]">
        <input type="text" name="module[]">
        <input type="text" name="module[]">
        <input type="text" name="module[]">
        <input type="submit" value="Submit">
    </fieldset>
    <!-- Output as unordered list below the form -->
    <ul>
        <li><?= $modules[0]; ?></li>
        <li><?= $modules[1]; ?></li>
        <li><?= $modules[2]; ?></li>
        <li><?= $modules[3]; ?></li>
    </ul>
</form>


</body>
</html>