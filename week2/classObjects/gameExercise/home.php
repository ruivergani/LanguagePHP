<?php
    session_start();
    include './Game.php'; // Class
    // Create Objects 5 Games
    $games = array(); // using the array function you can populate objects

    $games[0] =  new Game();
    $games[0]->id = 1;
    $games[0]->title = 'That Football Game 2015';
    $games[0]->publisher = 'EAR Games';
    $games[0]->sales = 175.000;

    $games[1] =  new Game();
    $games[1]->id = 2;
    $games[1]->title = 'Falling Out 4';
    $games[1]->publisher = 'Whiskas';
    $games[1]->sales = 121.500;

    $games[2] =  new Game();
    $games[2]->id = 3;
    $games[2]->title = 'Plumber Racing';
    $games[2]->publisher = 'Nentindos';
    $games[2]->sales = 86.020;

    $games[3] =  new Game();
    $games[3]->id = 4;
    $games[3]->title = 'Engaged of Duty – Switchboard Ops';
    $games[3]->publisher = 'Inactivevision';
    $games[3]->sales = 62.465;

    $games[4] =  new Game();
    $games[4]->id = 5;
    $games[4]->title = 'Grand Bus Ride Manual';
    $games[4]->publisher = 'Classical Musicians';
    $games[4]->sales = 48.126;

    // Get Object from Session
    //$games = unserialize($_SESSION['games']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Game Exercise</title>
</head>
<body>
    <div class="container">
        <form name="frmGame" method="post" action="">
            <p><?php if(!empty($msg)){echo $msg; }?></p>
            <fieldset>
                <!-- Listar table com 5 games (ORDER BY SALES) -->
                <table border="1" cellspacing="0" cellpadding="10">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Publisher</th>
                        <th>Sales</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        foreach($games as $game){
                            $id = $game->id;
                            $title = $game->title;
                            $publisher = $game->publisher;
                            $sales = $game->sales;
                    ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $title; ?></td>
                            <td><?php echo $publisher; ?></td>
                            <td><?php echo $sales; ?></td>
                            <td><a style="color: blue;"  href="<?php  ?>">Edit</a></td>
                            <td><a style="color: red;"  href="<?php  ?>">Delete</a></td>
                        </tr>
                    <?php
                        }
                    ?>
                       
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>