<?php 
    echo "\nWelcome to Paper, Rock, Scissors.";
    $score_user = 0;
    $score_computer = 0;
    while ($score_computer < 3 && $score_user < 3){
        // user choice
        $user_choice = readline("\n\nEnter your selection: ");
        $user_lowercase = strtolower($user_choice);
        echo "\nYou chose: ${user_choice}";

        // computer choice generated randomly
        $array_choices = ['rock', 'paper', 'scissors'];
        $computer_choice = array_rand($array_choices); 
        if($computer_choice == 0){
            $computer_from_array = 'rock';
        }
        else if($computer_choice == 1){
            $computer_from_array = 'paper';
        }
        else{
            $computer_from_array = 'scissors';
        }
        echo "\nThe computer choice: ${computer_from_array}";

        // computer wins
        if(
          ($user_lowercase == 'scissors' && $computer_from_array == 'rock') or
          ($user_lowercase == 'paper' && $computer_from_array == 'scissors') or
          ($user_lowercase == 'rock' && $computer_from_array == 'paper')
          ){
            echo "\nComputer wins!";
            $score_computer += 1;
            echo "\nComputer score is ${score_computer} points.";
          }
          // user wins
          else if (
            ($user_lowercase == 'rock' && $computer_from_array == 'scissors') or
            ($user_lowercase == 'scissors' && $computer_from_array == 'paper') or
            ($user_lowercase == 'paper' && $computer_from_array == 'rock')
          ){
            echo "\nYou won!";
            $score_user += 1;
            echo "\nUser score is ${score_user} points.";
          }
          else{
            if($computer_from_array == $user_lowercase){
                echo "\nIt is a draw.";
            }
          }
    }
?>