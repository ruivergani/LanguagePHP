<?php
    
 ?>
<html>
<head>
<title>Page 3</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <!-- Username -->
            <label for="E-mail"><b>E-mail</b></label>
            <input type="text" placeholder="Enter E-mail" name="E-mail" required>
            <!-- T&C Acceptance checkbox -->
            <label for="acceptanceBox">T&C Acceptance</label>
            <input type="checkbox" id="acceptanceBox" name="acceptanceBox" value="checked">
            <!-- Terms and Conditions -->
            <label for="checkbox"> I agree to these <a href="#">Terms and Conditions</a>.</label>
            <input id="checkbox" type="checkbox" />
            <input type="submit" class="btn-secondary" value="Submit">
        </form>
    </div>
</body>
</html>