<?php
    $username_hidden = $_POST['username'];
    $password_hidden = $_POST['password'];
    $dob_hidden = $_POST['date_of_birth'];
    $mother_name_hidden = $_POST['mother_name'];
 ?>
<html>
<head>
<title>Page 2</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="post">
            <!-- Username -->
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <!-- Hidden form concept -->
            <input type="hidden" value="<?= $username_hidden; ?>" name="username_hidden">
            <!-- Password -->
            <label for="password"><b>Password</b></label>
            <input type="text" placeholder="Enter password" name="password" required>
            <!-- Hidden form concept -->
            <input type="hidden" value="<?= $password_hidden; ?>" name="password_hidden">
            <!-- Date of Birth -->
            <label for="date_of_birth"><b>Date of Birth</b></label>
            <input type="date" placeholder="Enter password" name="date_of_birth" required>
            <!-- Hidden form concept -->
            <input type="hidden" value="<?= $dob_hidden; ?>" name="dob_hidden">
            <!-- Mother's maiden name -->
            <label for="mother_name"><b>Mother's maiden Name</b></label>
            <input type="text" placeholder="Mother's name" name="mother_name" required>
            <!-- Hidden form concept -->
            <input type="hidden" value="<?= $mother_name_hidden; ?>" name="mother_name_hidden">
            <input type="submit" class="btn-secondary" value="Submit">
        </form>
    </div>
</body>
</html>