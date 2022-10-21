<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration: Stage 2</title>
    <link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="stage3.php" method="post">
            <fieldset>
                <legend>Registration Wizard</legend>
                <!-- Full Name -->
                <input type="hidden" value="<?php echo $_POST['name'] ?>" name="name">
                <!-- Address -->
                <input type="hidden" value="<?php echo $_POST['address'] ?>" name="address">
                <!-- Date of Birth -->
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" required>
                <!-- Username -->
                <label for="username">Username:</label>
                <input type="text" name="username" required>
                <!-- Password -->
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <!-- Mother's Maiden Name -->
                <label for="maiden_name">Mother's Maiden Name:</label>
                <input type="text" name="maiden_name" required>

                <!-- Submit -->
                <input type="submit" value="Submit &rarr;">
            </fieldset>
        </form>
    </div>
</body>
</html>