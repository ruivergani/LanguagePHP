<?php 
    $number = rand(1, 13);
    echo "Number: " . $number;
    switch ($number) {
        case ($number == 1):
          echo "\nAce";
          break;
        case ($number > 1 && $number <= 10):
          echo "\nFace value, so if a 2 display a 2 etc.";
          break;
        case ($number == 11):
          echo "\nJack";
          break;
        case ($number == 12):
          echo "\nQueen";
          break;
        case ($number == 13):
          echo "\nKing";
          break;
      }
?>