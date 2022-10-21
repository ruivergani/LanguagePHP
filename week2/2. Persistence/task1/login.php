<?php
    session_start(); // Session starts with the help of this function 
    $msg = "";
    if(isset($_SESSION['use'])){  // Checking whether the session is already there or not if 
        header("Location:homeGame.php"); // True then header redirect it to the home page directly
    }
    if(isset($_POST['login'])){ // It checks whether the user clicked login button or not 
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "Fred" && $password == "Bloggs"){  
            $_SESSION['use']= $username;
            echo '<script type="text/javascript"> window.open("homeGame.php","_self");</script>';
            // On Successful Login redirects to homeGame.php
            $msg = "Login successful."; 
        }
        else{
            $msg = "Invalid Username or Password";  
        }
    }
 ?>
<html>
<head>
<title>Sign In - Page 1</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h4><?php echo $msg; ?></h4>
            <!-- Username -->
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <!-- Password -->
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <input type="submit" name="login" class="btn-secondary" value="Login">
            </br>
            </br>
            <a href="./page2.php">Go to page 2</a>
            </br>
            </br>
            <a href="./page3.php">Go to page 3</a>
        </form>
    </div>
</body>
</html>