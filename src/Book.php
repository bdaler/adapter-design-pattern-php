<?php


namespace App;


use App\Interfaces\iBook;

class Book implements iBook
{

    public function open()
    {
        var_dump('opening the paper book.');
    }

    public function turnPage()
    {
        var_dump('turning the page of the paper book.');
    }
}