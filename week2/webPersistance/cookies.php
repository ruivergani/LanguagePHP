<?php
    // Must be set before any other output
    setcookie(
        "user_name", // The name of the cookie
        "Phil", // The data that the cookie stores
        time() + 3600 // An expery time (in this case 1 hour from now)
    );
    // to delete a cookie set a time to the past
        
    if (isset($_COOKIE['user_name'])){
        echo "Welcome {$_COOKIE['user_name']}";
    }

    session_start();
    $_SESSION['username'] = 'Phil';


?>