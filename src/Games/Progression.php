<?php

namespace BrainGames\Progression;

function getTask(): string
{
    return 'What number is missing in the progression?';
}

function getData(): array
{
    $start = rand(1, 15);
    $step = rand(2, 5);
    $overall = 10;
    $hidden = rand(0, $overall - 1);

    $progression = getProgression($start, $step, $overall);
    $answer = $progression[$hidden];
    $progression[$hidden] = '..';
    $question = implode(' ', $progression);

    return ['question' => $question, 'answer' => (string) $answer];
}

function getProgression(int $start, int $step, int $overall): array
{
    $result = [];
    for ($i = 0; $i < $overall; $i++) {
        $result[] = $start + $i * $step;
    }

    return $result;
}
