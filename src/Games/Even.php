<?php

namespace BrainGames\Even;

function getTask(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function getData(): array
{
    $question = rand(1, 99);
    $answer = processAnswer(isEven($question));

    return ['question' => $question, 'answer' => $answer];
}

function processAnswer(bool $bool): string
{
    return $bool === true ? 'yes' : 'no';
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
