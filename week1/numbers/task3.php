<?php
    $can_diameter = 15;
    $can_height = 30;
    $can_raio = floor($can_diameter / 2);
    $can_volume = ceil((3.14 * ($can_raio * $can_raio) * $can_height));
    $box_volume = ceil(60 * 30 * 35);

    $area_paint = (140 * 3.4);  # m2 (30 * 3.4) + (30 * 3.4) + (60 * 3.4) + (60 * 3.4)
    $can_cover_measurement = 5.1;  # m2
    $can_required = ($area_paint / $can_cover_measurement);

    $can_per_box = ($box_volume / $can_volume);
    print("\nVolume of a can: " .$can_volume);
    print("\nVolume of a box: " .$box_volume);
    print("\nQuantity of cans I can fit in 1 box: " .$can_per_box);

    $amount_full_boxes = ($can_required / $can_per_box);
    $total_cans_in_box = ($can_per_box * $amount_full_boxes);
    $remaining_cans = ceil(($can_required - $total_cans_in_box));

    print("\nNumber of cans required: " .ceil($can_required));  # (integer division area / cover of the pain)
    print("\nNumber of cans in box: " .$can_per_box);  # volume of box / volume of can integer)
    print("\nNumber of full boxes: " .$amount_full_boxes); # total can required / can per box = quantity of full boxes needed (integer)
    print("\nCans not packed in boxes:" .$remaining_cans); # can required - total quantity of cans in boxes (round up the value)
    echo "\n";
?>