<?php
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $id = $id - 1;
        unset($games[$id]);
    }
?>