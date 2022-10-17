<?php
  session_start();
  // Random Number Generator
  if (!isset($_SESSION['secret_random_number'])){ // if session is empty  (not set) then generate random number
    $_SESSION['secret_random_number'] = mt_rand(0,101);
  }
  $num_to_guess = $_SESSION['secret_random_number']; // put the session into the variable
  $message = "";
  $continue = "";
  $valid = false;
  if (!isset($_POST['guess'])){ // if guess is not empty
    $message = "Welcome!";
  } 
  else if ($_POST['guess'] > $num_to_guess) {
    $message = $_POST['guess'] . " is too big!";
  } 
  else if ($_POST['guess'] < $num_to_guess) {
    $message = $_POST['guess'] . " is too small!";
  } 
  else {
    $message = "Well done! You guessed the correct number.";
    $continue = "Would you like to continue?";
    $valid = true;
  }
  // Get values from the form
  $guess = (int)$_POST['guess'];
  $num_tries = (int)$_POST['num_tries'];
  $num_tries ++;
  ?>
<html>
<head>
<title>Task 3 PHP</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <!-- Form with hidden value to count tries -->
        <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
            <!-- Hidden form concept -->
            <input type="hidden" name="num_tries" value="<?php print $num_tries?>"/> 
            Type your guess here: 
            <input type="text" name="guess" value="<?php print $guess?>"/>
        </form>
        Quantity Trying: <?php print $num_tries ?><br/>
        <br/>
        Number to guess:
        <?php print $num_to_guess ?>
        <br/>
        <?php 
            print $message;
            echo "<br/>";
            echo "<br/>";
            print $continue;
            echo "<br/>";
            echo "<br/>";
            if ($valid == true){
                echo "<input  type='radio' id='yes' name='check_continue' value='yes'>";
                echo "<label for='yes'>Yes</label><br>";
                echo "<input type='radio' id='no' name='check_continue' value='no'>";
                echo "<label for='no'>No</label><br>";
            }
            
        ?>
        
    </div>
</body>
</html>