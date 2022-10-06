<?php
    $number_of_adults = 4; 
    $number_of_children = 29;
    $children_tickets = ($number_of_children / 10);
    $adult_ticket = 10.50;
    $child_ticket = 7.30;
    $current_price = 0;
    $children_price = $number_of_children * $child_ticket;
    $total_price = 0;
    $counter = 0;
    echo "\nThe adult ticket costs: £${adult_ticket}";
    echo "\nThe child ticket costs: £${child_ticket}";
    echo "\nChildren quantity: ${number_of_children}";
    echo "\nAdult quantity: ${number_of_adults}";
    // Calculate final price
    while ($children_tickets >= 1){
        $children_tickets -= 1;
        $counter += 1;
        $discount_free_tickets = $adult_ticket * $counter;
    }
    $current_price = ((($number_of_adults * $adult_ticket) - $discount_free_tickets) + $children_price);
    echo "\nFree tickets due to children: ${counter}";
    echo "\nDiscount Price: £${discount_free_tickets}";
    if($current_price > 100){
        $total_price = $current_price - ($current_price * 0.1); // 10% discount
    }
    else{
        $total_price = $current_price;
    }
    echo "\nTotal Price: £${total_price}";
?>

