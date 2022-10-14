<?php
    session_start(); // Session starts with the help of this function 
 ?>
<html>
<head>
<title>Login</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <?php
                if(!isset($_SESSION['use'])) { // If session is not set then redirect to Login Page
                    header("Location: login.php");  
                }
                    echo "Session Name: " . $_SESSION['use'];
                    echo "</br>";
                    echo "Login Success";
                    echo "</br>";
                    echo "</br>";
                    echo "<a href='logout.php'> Logout</a> "; 
            ?>
            </br>
            <a href="./login.php">Go to page 1</a>
            </br>
            </br>
            <a href="./page2.php">Go to page 2</a>
        </form>
    </div>
</body>
</html>