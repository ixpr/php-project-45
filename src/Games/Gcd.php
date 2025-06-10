<?php

namespace BrainGames\Gcd;

function getTask()
{
    return 'Find the greatest common divisor of given numbers.';
}

function getData()
{
    $expression = [rand(1, 99), rand(1, 99)];
    $question = implode(' ', $expression);
    $answer = getResult($expression);

    return ['question' => $question, 'answer' => $answer];
}

function getResult(array $expression)
{
    [$number1, $number2] = $expression;

    return getGcd($number1, $number2);
}

function getGcd(int $a, int $b)
{
    return ($a % $b) ? getGcd($b, $a % $b) : abs($b);
}
