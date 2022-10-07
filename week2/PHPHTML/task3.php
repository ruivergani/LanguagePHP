<?php
     $first_name = $_POST["first_name"];
     $surname = $_POST["surname"];
     $age = $_POST["age"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Form Data</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Personal Details</legend>
            <div>
                <label for="first_name">First name:</label>
                <input type="text" id="first_name" name="first_name" placeholder="<?= "${first_name}" ?>">
            </div>
            </br>
            <div>
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" placeholder="<?= "${surname}" ?>">
            </div>
            </br>
            <div>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" placeholder="<?= "${age}" ?>">
            </div>
            </br>
            <div>
                <input type="submit" value="Submit">
            </div>
        </fieldset>
    </form>
</body>
</html>
