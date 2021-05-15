<?php

namespace Brain\Games\Games\Engine;

function gameEngine($name, $game)
{
    $counterCorrectAnswer = 0;
    while ($counterCorrectAnswer < 3) {
        $answers = $game();
        $correctAnswer = $answers[0];
        $userAnswer =  $answers[1];
        $resultGame = $answers[2];
        if ($resultGame === true) {
            $counterCorrectAnswer += 1;
            print_r("Correct\n");
        } else {
            print_r("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\n");
            print_r("Let's try again, {$name}!\n");
            return null;
        }
    }
    print_r("Congratulations, {$name}!\n");
}
