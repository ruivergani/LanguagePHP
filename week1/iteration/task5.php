<?php
    // Sort the array and output as a list
    $films = array('The Matrix', 'Man of Steel', "Iron Man", "Avatar", "Twelve Monkeys");
    sort($films);

    $array_length = count($films);
    for ($i = 0; $i < $array_length; $i++){
        echo "$films[$i]";
        echo "\n";
    }
?>