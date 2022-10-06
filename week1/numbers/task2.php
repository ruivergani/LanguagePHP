<?php
    $sweets = 40;
    $students = 14;
    $leftover = floor($sweets / $students);
    $teacher = $sweets % $students;
    echo "\nEach student gets $leftover sweets";
    echo "\nThe teacher gets $teacher sweets";
    echo "\n";
?>