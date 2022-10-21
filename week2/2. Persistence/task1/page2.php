<?php
    session_start();
    $msg = "";
    if(isset($_SESSION['use'])){
        $msg = "Welcome to the system Fred.";
    }
 ?>
<html>
<head>
<title>Page 2</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h4><?php echo $msg; ?></h4>
            <a href="./login.php">Go to page 1</a>
            </br>
            </br>
            <a href="./page3.php">Go to page 3</a>
        </form>
    </div>
</body>
</html>