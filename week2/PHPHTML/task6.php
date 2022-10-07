<?php
    // Collect data variable from form
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <meta charset="UTF-8">
    <title>Display Form Data</title>
</head>
<body>
<div class="container">
    <form method="post">
        <fieldset>
            <legend>Personal Details</legend>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                </br></br>
                <label for="password1">Password:</label>
                <input type="password" id="password1" name="password1">
                </br></br>
                <label for="password2">Re-enter password:</label>
                <input type="password" id="password2" name="password2">
                </br></br>
                <input type="submit" value="Submit">
        </fieldset>
        </br></br>
        <!-- Display validation --> 
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Check if username and passoword exists
                if(empty($username) || empty($password1) || empty($password2)){
                    echo "Please enter a username and password.";
                }
                else{
                    // start other validation

                }
            }

        ?>
    </form>
</div>
</body>
</html>