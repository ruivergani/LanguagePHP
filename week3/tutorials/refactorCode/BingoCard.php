<?php
    define('COLUMNS', 5);
    define('ROWS', 5);
    define('HEADER', 'B I N G O');
    define('MAX_NUMBER', 60);

    $columnRange = MAX_NUMBER / COLUMNS;
    $bingoCard = array();

    for($x = 0; $x < COLUMNS; $x++) {
        $column = array();
        for($j = 0; $j < ROWS; $j++) {
            $min = $x * $columnRange+1;
            $max = ($x + 1) * $columnRange;
            do {
                $number = rand($min, $max);
            } while(in_array($number, $column));
            $column[] = $number;
        }
        sort($column);
        $bingoCard[] = $column;
    }

    $headers = explode(' ', HEADER);
    $output = '<table>';
    for($x=0; $x < COLUMNS; $x++) {
        if($x == 0) {
            $output .= '<tr>';
            for($j = 0; $j < ROWS; $j++)
                $output .= '<th>' . $headers[$j] . '</th>';
            $output .= '</tr>';
        }
        $output .= '<tr>';
        for($j=0; $j < ROWS; $j++) {
            $output .= '<td>' . $bingoCard[$j][$x] . '</td>';
        }
        $output .= '</tr>';
    }
    $output .= '</table>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 2</title>
    <meta charset="utf-8">
</head>
<body>
    <?= $output; ?>
</body>
</html>