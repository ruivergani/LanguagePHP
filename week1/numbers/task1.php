<?php
    $item_cost = 3.3; 
    $item_price = 5; 
    $overheads = 20;

    $profit = $item_price - $item_cost;
    $breakeven = $overheads / $profit;
    echo "\nProfit: ${profit}";
    echo "\nItems sold to break even: " .round($breakeven);
    echo "\n";
?>