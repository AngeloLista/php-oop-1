<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $genre;
    public $original_language;
    public $length;

    public function __construct($title, $director, $year, $genre, $original_language, $length)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
        $this->original_language = $original_language;
        $this->length = $length;
    }
}


$movie1 = new Movie("The Hunger Games", "Gary Ross", "2012", "Azione/Sci-fi", "Inglese", 142);


$movie2 = new Movie("Joker", "Todd Phillips", "2019", "Drammatico/Giallo", "Inglese", 122);

$movie3 = new Movie("Il Signore degli Anelli: La Compagnia dell'Anello", "Peter Jackson", "2001", "Fantasy/Avventura", "Inglese", 178);


var_dump($movie3);
