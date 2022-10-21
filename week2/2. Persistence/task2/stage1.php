<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration: Stage 1</title>
    <link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="stage2.php" method="post">
            <fieldset>
                <legend>Registration Wizard</legend>
                <!-- Name -->
                <label for="name"><b>Full Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" required>

                <!-- Address -->
                <label for="address"><b>Address</b></label>
                <input type="text" placeholder="Enter Address" name="address" required>
            </fieldset>
            <input type="submit" class="btn-secondary" value="Submit &rarr;">
        </form>
    </div>
</body>
</html>