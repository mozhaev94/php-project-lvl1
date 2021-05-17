<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

function getUserName(): string
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
