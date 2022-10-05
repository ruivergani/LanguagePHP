<?php
    $rows = readline("Please enter the number of rows: ");
    $columns = readline("Please enter the number of columns:");

    for($i = 0; $i < $rows; $i++){
        for($j = 0; $j < $columns; $j++){
            echo '*';
        }
        
    }

?>