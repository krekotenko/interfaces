<?php

namespace Traits;

trait EatingCheckerTrait
{
    public function eatingLog () {
        $fileName = 'logEating.txt';
        $logString = $this->name . ' start eating in ' . date("Y-m-d H:i:s") . PHP_EOL;
        file_put_contents($fileName, $logString, FILE_APPEND | LOCK_EX);
    }

    public function eatingLogEcho ($food) {
        echo $food . "<br>";
    }
}