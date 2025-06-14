<?php

namespace BrainGames\Prime;

function getTask(): string
{
    return 'Answer "yes" if given number is prime. Otherwise answer "no".';
}

function getData(): array
{
    $question = rand(1, 99);
    $answer = processAnswer(isPrime($question));

    return ['question' => $question, 'answer' => $answer];
}

function processAnswer(bool $bool): string
{
    return $bool === true ? 'yes' : 'no';
}

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
