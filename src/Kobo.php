<?php


namespace App;


use App\Interfaces\iEReader;

class Kobo implements iEReader
{

    public function turnOn()
    {
        var_dump('turn on the Kobo reader');
    }

    public function pressNextButton()
    {
        var_dump('press next button on the Kobo');
    }
}