<?php 
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="../../css/style.css">
    <meta charset="UTF-8">
    <title>Task 5</title>
</head>
<body>
    <div class="container">
        <p>====== Menu ====== </p>
        <p>1. Add </p>
        <p>2. Subtract</p>
        <p>3. Multiply</p>
        <p>4. Divide</p>
        <p>5. Remainder</p>
        <form method="post">
            Number 1: <input type="number" name="num1" placeholder="Type a number"/><br/><br/>
            Number 2: <input type="number" name="num2" placeholder="Type a number"/><br/><br/>
            Operation Number: <input type="number" name="operation" placeholder="Type a number"/><br/><br/>
            <input type="submit" class="botao" value="Submit"/>
        </form>
    </br>
    <!-- Display results -->
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
        
        if ($operation == 1){
            add($num1, $num2);
        }
        else if ($operation == 2){
            sub($num1, $num2);
        }
        else if ($operation == 3){
            multiply($num1, $num2);
        }
        else if ($operation == 4){
            division($num1, $num2);
        }
        else if ($operation == 5){
            restOfDivision($num1, $num2);
        }
        else{
            echo("\nNo operation selected.");
        }

    ?>
    </div>
</body>
</html>