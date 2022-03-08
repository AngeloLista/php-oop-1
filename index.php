<?php

include __DIR__ . "/models/Movie.php";

// Instances
$movie1 = new Movie("The Hunger Games", "Gary Ross", "2012", "Azione/Sci-fi", "Inglese", 142);

$movie2 = new Movie("Joker", "Todd Phillips", "2019", "Drammatico/Giallo", "Inglese", 122);

$movie3 = new Movie("Il Signore degli Anelli: La Compagnia dell'Anello", "Peter Jackson", "2001", "Fantasy/Avventura", "Inglese", 178);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <section id="movie1">
            <h3><?php echo $movie1->getTitle() ?></h3>
            <p><?php echo $movie1->getDirector() ?></p>
            <p><?php echo $movie1->getYear() ?></p>
            <p><?php echo $movie1->getGenre() ?></p>
            <p><?php echo $movie1->getOriginalLanguage() ?></p>
            <p><?php echo $movie1->getLength() ?></p>
        </section>
        <hr>
        <section id="movie2">
            <h3><?php echo $movie2->getTitle() ?></h3>
            <p><?php echo $movie2->getDirector() ?></p>
            <p><?php echo $movie2->getYear() ?></p>
            <p><?php echo $movie2->getGenre() ?></p>
            <p><?php echo $movie2->getOriginalLanguage() ?></p>
            <p><?php echo $movie2->getLength() ?></p>
        </section>
        <hr>
        <section id="movie3">
            <h3><?php echo $movie3->getTitle() ?></h3>
            <p><?php echo $movie3->getDirector() ?></p>
            <p><?php echo $movie3->getYear() ?></p>
            <p><?php echo $movie3->getGenre() ?></p>
            <p><?php echo $movie3->getOriginalLanguage() ?></p>
            <p><?php echo $movie3->getLength() ?></p>
        </section>
    </main>

</body>

</html>