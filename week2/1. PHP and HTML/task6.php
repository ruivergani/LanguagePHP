<?php
    // Collect data variable from form
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
?>
// A new way of doing the same exercise (tutorial task6)
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = (string) $_POST['username'];
//     $password = (string) $_POST['password1'];
//     $password_confirm = (string) $_POST['password2'];

//     $username_length = count(str_split($username));

//     if ($username_length < 4 || ($username_length > 15)) {
//         $errors[] = 'Username must be between 4 and 15 characters';
//     }

//     if ($password == '' || $password_confirm == '' || $password !== $password_confirm) {
//         $errors[] = "You must enter a password and re-enter it";
//     }

//     if ($errors === []) {
//         $output = "Welcome!";
//     }
// }
    
<!-- 
     <?php if (count($errors) > 0): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
-->
    
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
                $valid = true;
                // Check if username and passoword exists
                if(empty($username) || empty($password1) || empty($password2)){
                    echo "Please enter a username and password.";
                    $valid = false;
                }
                else{
                    // Not empty passoword or username do the following
                    $len = strlen($username); // Length of the string
                    if ($len < 4){
                        echo "</br>";
                        echo "Field Name is too short, minimum is 4 characters (15 max).";
                        $valid = false;
                    }
                    elseif($len > 15){
                        echo "</br>";
                        echo "Field Name is too long, maximum is 15 characters (4 min).";
                        $valid = false;
                    }
                    // match passwords
                    if ($_POST['password1']!= $_POST['password2']){
                        $valid = false;
                        echo "</br>";
                        echo "</br>";
                        echo("Oops! Password did not match! Try again. ");
                    }
                    if($valid){
                        echo "Congratulations! Data has been stored successfully.";
                        exit();
                    }
                }
            }

        ?>
    </form>
</div>
</body>
</html>
