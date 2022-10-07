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
    
    $selection = readline("\nType your number selection: ");
    echo("\n==== Menu ======");
    echo("1. Add");
    echo("2. Subtract");
    echo("3. Multiply");
    echo("4. Divide");
    echo("5. Remainder");
    echo("6. Exit");
    while ($selection != 6){
        if ($selection == 1){
            add($num1, $num2);
            exit();
        }
        else if ($selection == 2){
            sub($num1, $num2);
            exit();
        }
        else if ($selection == 3){
            multiply($num1, $num2);
            exit();
        }
        else if ($selection == 4){
            division($num1, $num2);
            exit();
        }
        else if ($selection == 5){
            restOfDivision($num1, $num2);
            exit();
        }
        else{
            echo("\nNo operation selected.");
        }
        $selection = readline("\nType your number selection: ");
    }
?>
