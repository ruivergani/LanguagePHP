<?php

$words = [
    'aberration', 'amphibious', 'basketry', 'casserole',
    'enameler', 'encapsulate', 'gastronomy', 'hesitant',
    'issue', 'kudos', 'legitimacy', 'misrepresentative',
    'offish', 'toxicology', 'visionary', 'zucchini'
];

const HANGMAN_TEXT = "HANGMAN";

$guesses = 0;
$guessed = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $guess = $_POST['guess'];
    $guesses = (int) $_POST['guesses'];
    $guessed = $_POST['guessed'] ?? [];
    $word_to_guess = $_POST['word'];

    $word_characters = str_split($word_to_guess); // convert string to array

    if (count($word_characters) === count(str_split($word_to_guess))) {
        echo "<h2>Well done! It took you $guesses guesses</h2>";
    }

    if ($guess != '') {
        if (!in_array($guess, $word_characters) && !in_array($guess, $guessed)) {
            $guesses++;
        }

        $guessed[] = $guess;

        $guessed = array_unique($guessed);
    }
} else {
    $word_to_guess = $words[rand(0, count($words) - 1)];
}

?>

<p>
    <?php
    foreach (str_split($word_to_guess) as $char)
    {
        if (in_array($char, $guessed))
            echo "$char ";
        else
            echo '_ ';
    }
    ?>
</p>

<form method="post">
    <input type="hidden" name="guesses" value="<?= $guesses ?>">
    <input type="hidden" name="word" value="<?= $word_to_guess ?>">

    <?php foreach ($guessed as $char): ?>
        <input type="hidden" name="guessed[]" value="<?= $char ?>">
    <?php endforeach; ?>

    <label>
        Character:
        <input type="text" maxlength="1" name="guess" placeholder="a, b, c...">
    </label>
    <input type="submit">
</form>

<h1>
    <?php

    for ($i = 0; $i < $guesses; $i++) {
        echo HANGMAN_TEXT[$i];
    }
    ?>
</h1>

<?= $word_to_guess ?>
