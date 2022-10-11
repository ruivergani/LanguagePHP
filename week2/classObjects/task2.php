<?php
    include './Musician.php';
    // Collect data variable from form
    $name = $_POST["name"];
    $date_of_birth = $_POST["date_of_birth"];
    // Instantiate 4 new Objects as in the table
    $john = new Musician();
    $john->setName("John Lennon");
    $john->setDateOfBirth(date("1940/10/8"));

    $paul = new Musician();
    $paul->setName("Paul McCartney");
    $paul->setDateOfBirth(date("1942/6/18"));

    $george = new Musician();
    $george->setName("George Harrison");
    $george->setDateOfBirth(date("1943/2/25"));

    $ringo = new Musician();
    $ringo->setName("Ringo Starr");
    $ringo->setDateOfBirth(date("1940/7/06"));

    //Array of Musicians
    $musicians = [$john, $paul, $ringo, $george];
    
    //Create every time you press the button
    $person = new Musician();
    $person->setName($name);
    $person->setDateOfBirth($date_of_birth);

    // Put into an array
    array_push($musicians, $person);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <meta charset="UTF-8">
    <title>Task 2 PHP</title>
</head>
<body>
<div class="container">
    <form method="post">
        <fieldset>
            <legend>Personal Details</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                </br></br>
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth">
                </br></br>
                <input type="submit" value="Create another Musician">
        </fieldset>
        </br></br>
        <?php
            // Display the objects and details
            for($i = 0; $i < count($musicians); $i++){
                if(isset($musicians[$i])){
                    echo "Musician ${i}";
                    echo "</br>";
                    echo "Hello, " . $musicians[$i]->getName(); ". </br>";
                    echo "</br>";
                    echo "You were born in " . $musicians[$i]->getDateOfBirth();
                    echo "</br>";
                    echo "</br>";
                }
                else{
                    echo "No data found.";
                }
            }
        ?>
    </form>
</div>
</body>
</html>