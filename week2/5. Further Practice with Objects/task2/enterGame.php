<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1. Enter Game Details</title>
</head>
<body>
    <div class="container">
        <form method="post" action="homeGame.php">
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
                <!-- Create Button -->
                <input type="submit" value="Add Game" class="btn-secondary" name="create">
            </fieldset>
        </form>
    </div>
</body>
</html>