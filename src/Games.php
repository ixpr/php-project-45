<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

function runEven()
{
    $questionsCount = 3;

    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < $questionsCount; $i++) {
        $number = rand(1, 99);
        line("Question: %s", $number);
        $answer = prompt('Your answer');
        if (!isAnswerCorrect($number, $answer)) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, getOppositeAnswer($number));
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}

function isEven($number)
{
    return $number % 2 == 0;
}

function isAnswerCorrect($number, $answer)
{
    if (isEven($number) && $answer == 'yes' || !isEven($number) && $answer == 'no') {
        return true;
    }
    return false;
}

function getOppositeAnswer($number)
{
    if (isEven($number)) {
        return 'yes';
    }
    return 'no';
}
