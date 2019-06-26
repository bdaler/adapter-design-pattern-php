<?php
require 'vendor/autoload.php';

use App\Book;
use App\Kobo;
use App\Kindle;
use App\Person;
use App\Adapter\EReaderAdapter;

(new Person())->readBook(new Book());
(new Person())->readBook(new EReaderAdapter(new Kindle()));
(new Person())->readBook(new EReaderAdapter(new Kobo()));

