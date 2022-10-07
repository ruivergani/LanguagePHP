<?php
    // Fun cal exercise
    function add($num1, $num2){
        $result = ($num1 + $num2);
        echo "${result}";
    }
    function sub($num1, $num2){
        $result = ($num1 - $num2);
        echo "${result}";
    }
    function multiply($num1, $num2){
        $result = ($num1 * $num2);
        echo "${result}";
    }
    function division($num1, $num2){
        $result = ($num1 / $num2);
        echo "${result}";
    }
    function restOfDivision($num1, $num2){
        $result = ($num1 % $num2);
        echo "${result}";
    }
    $num1 = readline("\nType the first number: ");
    $num2 = readline("\nType the second number: ");

    echo("\n==== Menu ======");
    echo("\n1. Add");
    echo("\n2. Subtract");
    echo("\n3. Multiply");
    echo("\n4. Divide");
    echo("\n5. Remainder");
    echo("\n6. Exit");
    $selection = readline("\nType your menu selection: ");
    
    while ($selection != 6){
        if ($selection == 1){
            add($num1, $num2);
        }
        else if ($selection == 2){
            sub($num1, $num2);
        }
        else if ($selection == 3){
            multiply($num1, $num2);
        }
        else if ($selection == 4){
            division($num1, $num2);
        }
        else if ($selection == 5){
            restOfDivision($num1, $num2);
        }
        else{
            echo("\nNo operation selected.");
        }
        $selection = readline("\nType your number selection: ");
    }
?>
