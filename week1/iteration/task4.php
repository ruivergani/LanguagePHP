<?php
    $rainbow_colors = array("Red", "Orange", "Yellow", "Blue", "Magenta", "Violet", "Black");
    $user_choice = readline("\nEnter an integer between 1 - 7 (-1 exit): ");
    while($user_choice != -1){
        switch($user_choice){
            case "1":
                echo "\n$rainbow_colors[0]";
               break;
            case 2:
                echo "\n$rainbow_colors[1]";
                break;
            case 3:
                 echo "\n$rainbow_colors[2]";
                 break;
            case 4:
                echo "\n$rainbow_colors[3]";
                break;
            case 5:
                 echo "\n$rainbow_colors[4]";
                 break;
            case 6:
                echo "\n$rainbow_colors[5]";
                break;
            case 7:
                echo "\n$rainbow_colors[6]";
                break;
            default:
                echo "\nEnd of program.";
        }
        $user_choice = readline("\nEnter an integer between 1 - 7 (-1 exit): ");
    }
?>