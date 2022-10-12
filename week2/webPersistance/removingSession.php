<?php

$_SESSION = []; // empty array
if (ini_get('session.use_cookies')) { // check if cookies are enabled
    $params = session_get_cookie_params(); //   get params from session
    setcookie(
        session_name(), '', 1,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}

session_destroy();

?>