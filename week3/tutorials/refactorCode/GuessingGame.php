<?php
    session_start();
    $result = '';
    if($_POST){
        if(isset($_POST['submit'])){
            $tries = $_SESSION['tries'];
            try{
                $guess1 = $_POST['guess'];
                if(!($guess1 > 0 && $guess1 <= 100)){
                    throw new Exception('Enter number between 1 and 100 inclusive');
                }
                switch(true){
                    case $guess1 == $tries:
                        $result = 'Game is won';
                        $_SESSION['tries'] = rand(1,100);
                        break;
                    case $guess1 > $tries:
                        $result = 'Guess was high';
                        break;
                    case $guess1 < $tries:
                        $result = 'Guess was low';
                    }
            }
            catch(Exception $e){
                $result = $e->getMessage();
            }
        }
        else{
            $_SESSION['tries'] = rand(1,100);
        }
    }
    else{
        $_SESSION['tries'] = rand(1,100);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>High Low Game</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Guessing Game</legend>
        <p><label>Guess: <input type="text" id="guess" name="guess"></label></p>
        <p><input type="submit" name="submit" value="Submit"><input type="submit" name="nsm" value="Restart"></p>
    </fieldset>
</form>
<p><?= $result;?></p>
</body>
</html>