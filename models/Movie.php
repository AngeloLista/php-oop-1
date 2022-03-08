<?php class Movie

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

    public function getTitle()
    {
        return $this->title;
    }
    public function getDirector()
    {
        return $this->director;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function getOriginalLanguage()
    {
        return $this->original_language;
    }
    public function getLength()
    {
        return $this->length;
    }
}
