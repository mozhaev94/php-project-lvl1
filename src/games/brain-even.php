<?php

namespace Brain\Game\Games\Brain\Even;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Helper\Function\welcome;
use function Brain\Games\Games\Engine\gameEngine;
use function Brain\Games\Cli\getUserName;

function gameBrainEven()
{
    $gameLogic = function () {
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
    welcome();
    $name = getUserName();
    print_r("Answer \"yes\" if the number is even, otherwise answer \"no\".\n");
    gameEngine($name, $gameLogic);
}
