<?php
    $email_hidden = $_POST['email'];
    $acceptance_hidden = $_POST['acceptanceBox'];
 ?>
<html>
<head>
<title>Page 3</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="<?php print $_SERVER['PHP_SELF']?>" method="post">
            <!-- Username -->
            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="Enter E-mail" name="email" required>
            <!-- Hidden form concept -->
            <input type="hidden" name="email_hidden" value="<?php $email_hidden?>"/> 
            <!-- T&C Acceptance checkbox -->
            <label for="acceptanceBox">T&C Acceptance</label>
            <input type="checkbox" id="acceptanceBox" name="acceptanceBox">
            <!-- Hidden form concept -->
            <input type="hidden" name="acceptance_hidden" value="<?php $acceptance_hidden?>"/> 
            <!-- Terms and Conditions -->
            <label for="checkbox"> I agree to these <a href="#">Terms and Conditions</a>.</label>
            <input id="checkbox" type="checkbox"/>
            <!-- Hidden form concept -->
            <input type="hidden" name="checkbox_hidden" value="<?php $checkbox_hidden?>"/> 
            <input type="submit" class="btn-secondary" value="Submit">
        </form>
    </div>
</body>
</html>