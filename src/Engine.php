<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

class Engine {
	public static function game ($question, $res, $name) {
		$q = prompt($question);
		line("Your answer: %s!", $q);
		
		if($res == $q) {
			line("Correct!");
		} else {
			line("'{$q}' is wrong answer ;(. Correct answer was '{$res}'");
			line("Let's try again, {$name}!");
			die();
		}
	}
}