<?php

namespace BrainGames\Calc;

function getTask(): string
{
    return 'What is the result of the expression?';
}

function getData(): array
{
    $operators = ['+', '-', '*'];
    $expression = [rand(1, 99), $operators[rand(0, count($operators) - 1)], rand(1, 99)];
    $question = implode(' ', $expression);
    $answer = getResult($expression);

    return ['question' => $question, 'answer' => (string) $answer];
}

function getResult(array $expression): mixed
{
    [$number1, $operator, $number2] = $expression;
    switch ($operator) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        default:
            $result = null;
            break;
    }

    return $result;
}
