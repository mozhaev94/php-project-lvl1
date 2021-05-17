<?php

namespace Brain\Games\Brain\Progression;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Engine\startGameEngine;

function getRandomProgression()
{
    $progressionLength = rand(5, 10);
    $progressionStep = rand(1, 50);
    $progressionItem = rand(1, 100);
    $progression = [];
    for ($i = 0; $i <= $progressionLength; $i += 1) {
        $progression[] = $progressionItem;
        $progressionItem += $progressionStep;
    }
    return $progression;
}

function runGameProgression()
{
    $runGameLogic = function () {
        $answers = [];
        $progression = getRandomProgression();
        $hiddenItemIndex = rand(0, count($progression) - 1);
        $correctAnswer = $progression[$hiddenItemIndex];
        $progression[$hiddenItemIndex] = '..';
        $question = implode(' ', $progression);
        line("Question: {$question}");
        $userAnswer = (int) prompt("Your answer");
        $answers[] = $correctAnswer;
        $answers[] = $userAnswer;
        $answers[] = $correctAnswer === $userAnswer;
        return $answers;
    };
    $description = "What number is missing in the progression?\n";
    startGameEngine($description, $runGameLogic);
}
