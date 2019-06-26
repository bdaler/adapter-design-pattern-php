<?php


namespace App;


use App\Interfaces\iEReader;

class Kindle implements iEReader
{
    public function turnOn()
    {
        var_dump('turn the Kindle on.');
    }

    public function pressNextButton()
    {
        var_dump('press the next button on the Kindle.');
    }
}