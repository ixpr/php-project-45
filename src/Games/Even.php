<?php

namespace BrainGames\Even;

function getTask()
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function getData()
{
    $question = rand(1, 99);
    $answer = processAnswer(isEven($question));

    return ['question' => $question, 'answer' => $answer];
}

function processAnswer(bool $bool)
{
    return $bool === true ? 'yes' : 'no';
}

function isEven(int $number)
{
    return $number % 2 == 0;
}
