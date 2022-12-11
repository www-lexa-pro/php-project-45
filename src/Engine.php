<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function game(string $question, string $res, string $name)
{
    $q = prompt($question);
    line("Your answer: %s!", $q);

    if ($res == $q) {
        line("Correct!");
    } else {
        line("'{$q}' is wrong answer ;(. Correct answer was '{$res}'");
        line("Let's try again, {$name}!");
        die();
    }
}
