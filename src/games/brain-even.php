<?php

namespace Brain\Games\Brain\Even;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\startGameEngine;

function runGameBrainEven(): mixed
{
    $runGameLogic = function (): array {
        $answers = [];
        $number = rand(1, 100);
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';
        line("Question: {$number}");
        $userAnswer = prompt("Your answer");
        $answers[] = $correctAnswer;
        $answers[] = $userAnswer;
        $answers[] = $correctAnswer === $userAnswer;
        return $answers;
    };
    $description = "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";
    startGameEngine($description, $runGameLogic);
    return null;
}
