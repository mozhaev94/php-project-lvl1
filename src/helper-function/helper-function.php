<?php

namespace Brain\Games\Helper;

function welcome()
{
    print_r("Welcome to the Brain Games!\n");
}

function getRandomOperator()
{
    $operators = ['+','*'];
    return $operators[rand(0,1)];
}
