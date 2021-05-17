<?php

namespace Brain\Games\Engine;

use function Brain\Games\Cli\getUserName;

function startGameEngine(string $description, callable $runGameLogic)
{
    print_r("Welcome to the Brain Games!\n");
    $name = getUserName();
    print_r($description);
    $counterCorrectAnswer = 0;
    while ($counterCorrectAnswer < 3) {
        $answers = $runGameLogic();
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
