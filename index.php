<!--create un file index.php in cui:
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
 -->

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