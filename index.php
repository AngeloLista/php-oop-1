<?php

include __DIR__ . "/data/movies.php";
include __DIR__ . "/models/Movie.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <main>
        <?php foreach ($movies as $movie) :
            // Dynamic obj creation
            $movie_obj = new Movie($movie['title'], $movie['director'], $movie['year'], $movie['genre'], $movie['original_language'], $movie['length'], $movie['plot']);
        ?>
            <section id="movie1">
                <h3><?php echo $movie_obj->title ?></h3>
                <p><?php echo $movie_obj->director ?></p>
                <p><?php echo $movie_obj->year ?></p>
                <p><?php echo $movie_obj->genre ?></p>
                <p><?php echo $movie_obj->original_language ?></p>
                <p><?php echo $movie_obj->length ?></p>
                <p><?php echo $movie_obj->getAbstract() ?></p>
            </section>
            <hr>
        <?php endforeach; ?>
    </main>

</body>

</html>