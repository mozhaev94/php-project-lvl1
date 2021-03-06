<?php

namespace Brain\Games\Brain\Calc;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\startGameEngine;

function getRandomOperator(): string
{
    $operators = ['+','*'];
    return $operators[rand(0, 1)];
}

function runGameCalc(): mixed
{
    $runGameLogic = function (): array {
        $answers = [];
        $firstOperand = rand(1, 10);
        $secondOperand = rand(1, 10);
        $correctAnswer = 0;
        $operator = getRandomOperator();
        line("Question: {$firstOperand} {$operator} {$secondOperand}");
        $userAnswer = (int) prompt("Your answer");
        switch ($operator) {
            case '+':
                $correctAnswer += $firstOperand + $secondOperand;
                break;
            case '*':
                $correctAnswer += $firstOperand * $secondOperand;
                break;
        }
        $answers[] = $correctAnswer;
        $answers[] = $userAnswer;
        $answers[] = $correctAnswer === $userAnswer;
        return $answers;
    };
    $description = "What is the result of the expression?\n";
    startGameEngine($description, $runGameLogic);
    return null;
}
