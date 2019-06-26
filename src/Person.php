<?php


namespace App;


use App\Interfaces\iBook;

class Person
{

    /**
     * @param iBook $book
     */
    public function readBook(iBook $book)
    {
        $book->open();
        $book->turnPage();
    }
}