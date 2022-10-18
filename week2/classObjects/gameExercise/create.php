<?php
    session_start();
    include ('./Game.php');
    $msg = "";
    if(isset($_POST['create'])){ // It checks whether the user clicked create button or not 
        $game_id = $_POST['game_id'];
        $title = $_POST['title'];
        $publisher = $_POST['publisher'];
        $sales = $_POST['sales'];

        $num_tries = 5;
        
        // Create a new game
        $games[$num_tries] =  new Game();
        $games[$num_tries]->id = $game_id;
        $games[$num_tries]->title = $title;
        $games[$num_tries]->publisher = $publisher;
        $games[$num_tries]->sales = $sales;

        $num_tries++;

        // Store this new game in the array of games
        // Set Store Object in Session
        $_SESSION['games'] = serialize($games);
        echo '<script type="text/javascript"> window.open("home.php","_self");</script>'; 
        $msg = "Object Created."; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Exercise</title>
</head>
<body>
    <div class="container">
        <form name="frmGame" method="post" action="">
            <p><?php if(!empty($msg)){echo $msg; }?></p>
            <fieldset>
                <legend>Add Game</legend>
                <!-- Game ID -->
                <label for="game_id">Game ID:</label>
                <input type="number" id="game_id" name="game_id" placeholder="Enter ID" required>
                <!-- Title -->
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" placeholder="Enter Title" required>
                <!-- Publisher -->
                <label for="publisher">Publisher:</label>
                <input type="text" id="publisher" name="publisher" placeholder="Enter Publisher" required>
                <!-- Sales -->
                <label for="sales">Sales:</label>
                <input type="number" id="sales" name="sales" placeholder="42.300" required>
                <!-- Hidden form concept -->
                <input type="hidden" name="num_tries" value="<?php print $num_tries?>"/> 
                <!-- Create Button -->
                <input type="submit" value="Add Game" class="btn-secondary" name="create">
            </fieldset>
        </form>
    </div>
</body>
</html>