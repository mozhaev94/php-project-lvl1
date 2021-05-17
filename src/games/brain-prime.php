<?php

namespace Brain\Games\Brain\Prime;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\startGameEngine;

function isPrime($number)
{
    $stack = [];
    for ($i = 1; $i <= $number; $i += 1) {
        if ($number % $i === 0) {
            $stack[] = $i;
        }
    }
    return count($stack) === 2 ? 'yes' : 'no';
}

function runGamePrime()
{
    $runGameLogic = function () {
        $answers = [];
        $number = rand(1, 100);
        line("Question: {$number}");
        $userAnswer = prompt("Your answer");
        $correctAnswer = isPrime($number);
        $answers[] = $correctAnswer;
        $answers[] = $userAnswer;
        $answers[] = $correctAnswer === $userAnswer;
        return $answers;
    };
    $description = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";
    startGameEngine($description, $runGameLogic);
}
