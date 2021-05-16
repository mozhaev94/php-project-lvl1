<?php

namespace Brain\Games\Brain\Gsd;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\startGameEngine;

function findBiggerDivisor($firstNum, $secondNum)
{
    $divisor = 1;
    for ($i = $divisor; $i <= $firstNum; $i += 1) {
        if ($firstNum % $i === 0 && $secondNum % $i === 0) {
            $divisor = $i;
        }
    }
    return $divisor;
}

function runGameGsd()
{
    $runGameLogic = function () {
        $answers = [];
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        line("Question: {$firstNum} {$secondNum}");
        $userAnswer = (int) prompt("Your answer");
        $correctAnswer = findBiggerDivisor($firstNum, $secondNum);
        $answers[] = $correctAnswer;
        $answers[] = $userAnswer;
        $answers[] = $correctAnswer === $userAnswer;
        return $answers;
    };
    $description = "Find the greatest common divisor of given numbers.\n";
    startGameEngine($description, $runGameLogic);
}
