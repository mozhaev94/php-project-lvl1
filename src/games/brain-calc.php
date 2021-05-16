<?php

namespace Brain\Game\Games\Brain\Calc;

use function cli\line;
use function cli\prompt;
use function Brain\Games\Helper\welcome;
use function Brain\Games\Helper\getRandomOperator;
use function Brain\Games\Games\Engine\gameEngine;
use function Brain\Games\Cli\getUserName;

function gameCalc()
{
    welcome();
}
gameCalc();