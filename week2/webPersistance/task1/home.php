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
        echo $_SESSION['use'];
        echo "Login Success";
        echo "<a href='logout.php'> Logout</a> "; 
    ?>
  </div>
</body>
</html>