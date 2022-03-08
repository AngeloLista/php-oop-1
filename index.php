<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $genre;
    public $original_language;
    public $length;
}


$movie1 = new Movie();
$movie1->title = "The Hunger Games";
$movie1->director = "Gary Ross";
$movie1->year = "2012";
$movie1->genre = "Azione/Sci-fi";
$movie1->original_language = "Inglese";
$movie1->length = 142;


$movie2 = new Movie();
$movie2->title = "Joker";
$movie2->director = "Todd Phillips";
$movie2->year = "2019";
$movie2->genre = "Drammatico/Giallo";
$movie2->original_language = "Inglese";
$movie2->length = 122;

$movie3 = new Movie();
$movie3->title = "Il Signore degli Anelli: La Compagnia dell'Anello";
$movie3->director = "Peter Jackson";
$movie3->year = "2001";
$movie3->genre = "Fantasy/Avventura";
$movie3->original_language = "Inglese";
$movie3->length = 178;
