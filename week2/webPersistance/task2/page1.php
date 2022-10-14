<?php
    $name = $_POST["name"];
    $address = $_POST["address"];
?>
<html>
<head>
<title>Page 1</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <!-- Name -->
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>
            <!-- Address -->
            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required>
            <input type="submit" class="btn-secondary" value="Submit">
        </form>
    </div>
</body>
</html>