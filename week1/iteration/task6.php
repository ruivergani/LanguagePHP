<?php
    $one_to_five_times_table = [
        [1, 2, 3, 4, 5],
        [2, 4, 6, 8, 10],
        [3, 6, 9, 12, 15],
        [4, 8, 12, 16, 20],
        [5, 10, 15, 20, 25] 
    ];
    // using two foreach loops to accomplish this task
    for($i = 0; $i < count($one_to_five_times_table); $i++){
        for($j = 0; $j < count($one_to_five_times_table); $j++){
            echo $one_to_five_times_table[$i][$j] . " ";
        }
        echo "\n";
    }

?>