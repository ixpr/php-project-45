<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

function runGame(string $game): void
{
    switch ($game) {
        case 'even':
            $task = Even\getTask();
            break;
        case 'calc':
            $task = Calc\getTask();
            break;
        case 'gcd':
            $task = Gcd\getTask();
            break;
        case 'progression':
            $task = Progression\getTask();
            break;
        case 'prime':
            $task = Prime\getTask();
            break;
        default:
            return;
    }

    $questionsCount = 3;

    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($task);
    for ($i = 0; $i < $questionsCount; $i++) {
        switch ($game) {
            case 'even':
                $data = Even\getData();
                break;
            case 'calc':
                $data = Calc\getData();
                break;
            case 'gcd':
                $data = Gcd\getData();
                break;
            case 'progression':
                $data = Progression\getData();
                break;
            case 'prime':
                $data = Prime\getData();
                break;
            default:
                return;
        }
        line("Question: %s", $data['question']);
        $answer = prompt('Your answer');
        if ($data['answer'] !== $answer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $data['answer']);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
