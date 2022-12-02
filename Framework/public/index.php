<?php
    /** Front controller */
    /**
    if (array_key_exists('QUERY_STRING', $_SERVER)) {
    $uri = $_SERVER['QUERY_STRING'];
    } else {
    $uri = '';
    }
    echo 'Requested URL= "'.$uri.'"';
     */
    require'../Core/Router.php';
    $router=new Router();
// echo get_class($router);
    $router->add('',['controller'=>'Home', 'action'=>'index']);
    $router->add('posts',['controller'=>'Posts', 'action'=>'index']);
    $router->add('posts/new',['controller'=>'Posts', 'action'=>'new']);
    $url = $_SERVER['QUERY_STRING'] ?? '';
    if ($router->match($url)){
        echo '<pre>';
        var_dump($router->getParams());
        echo '</pre>';
    }
    else {
        echo "No route found for URL '$url' ";
    }
    /** echo '<pre>';
    var_dump($router->getRoutes());
     */