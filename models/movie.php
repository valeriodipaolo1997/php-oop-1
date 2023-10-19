<?php

class Movie
{
    public $title;
    public $year;
    public $language;
    

    function __construct($_title, $_language, $_year)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->year = $_year;
        
    }
};

$interstellar = new Movie('Interstellar', 'Inglese', 2014);
$lucy = new Movie('Lucy', 'Inglese', 2014);
var_dump($interstellar);
var_dump($lucy);