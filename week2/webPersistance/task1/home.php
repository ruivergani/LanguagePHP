<?php   
  session_start();  
?>
<html>
<head>
  <title>Home</title>
  <link href="../../../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
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
    </br>
    <a href="./page2.php">Go to page 2</a>
    </br>
    </br>
    <a href="./page3.php">Go to page 3</a>
  </div>
</body>
</html>