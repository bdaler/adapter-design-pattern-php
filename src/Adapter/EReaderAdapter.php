<?php


namespace App\adapter;


use App\Interfaces\iBook;
use App\Interfaces\iEReader;

class EReaderAdapter implements iBook
{
    /**
     * @var iEReader
     */
    private $reader;

    public function __construct(iEReader $reader)
    {
        $this->reader = $reader;
    }


    public function open()
    {
        $this->reader->turnOn();
    }

    public function turnPage()
    {
        $this->reader->pressNextButton();
    }
}