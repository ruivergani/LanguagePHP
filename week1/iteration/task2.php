<?php
    echo "\nDice matching algorithm \n";

    // calculate to match the dices
    $counter = 1;
    $dice1 = 0;
    $dice2 = 1;
    while($dice1 != $dice2){
        $dice1 = rand(1,6);
        $dice2 = rand(1,6);
        $counter += 1;
        echo "\nDice 1: " . $dice1 . "  | Dice 2: " . $dice2;
        if ($dice1 == $dice2){
            echo "\nMatching pair in ${counter} turns.";
            break;
        }
        else{
            continue;
        }
    }
?>