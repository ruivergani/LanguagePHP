<?php
    include './Person.php';
    // Collect data variable from form
    $first_name = $_POST["first_name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    // Instantiate an Object an pass values to it
    $person1 = new Person();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <meta charset="UTF-8">
    <title>Task 5 PHP</title>
</head>
<body>
<div class="container">
    <form method="post">
        <fieldset>
            <legend>Personal Details</legend>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name">
                </br></br>
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname">
                </br></br>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age">
                </br></br>
                <input type="submit" value="Submit">
        </fieldset>
        </br></br>
        <?php
            echo "Hello, ${first_name} ${surname}" . "<br>";
            echo "You are ${age} years old" . "<br>";
        ?>
    </form>
</div>
</body>
</html>