<?php
/**
 * Front Controller
 */

//if(array_key_exists('QUERY_STRING', $_SERVER)){
//    $uri = $_SERVER['QUERY_STRING'];
//}
//else{
//    $uri = '';
//}
//
//echo 'Requested URL= "'.$uri.'"';

// Routing

require '../Core/Router.php';
$router = new Router();

echo get_class($router);