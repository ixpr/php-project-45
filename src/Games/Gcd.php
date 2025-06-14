<?php

namespace BrainGames\Gcd;

function getTask(): string
{
    return 'Find the greatest common divisor of given numbers.';
}

function getData(): array
{
    $expression = [rand(1, 99), rand(1, 99)];
    $question = implode(' ', $expression);
    $answer = getResult($expression);

    return ['question' => $question, 'answer' => (string) $answer];
}

function getResult(array $expression): int
{
    [$number1, $number2] = $expression;

    return getGcd($number1, $number2);
}

function getGcd(int $a, int $b): int
{
    return ($a % $b > 0) ? getGcd($b, $a % $b) : abs($b);
}
