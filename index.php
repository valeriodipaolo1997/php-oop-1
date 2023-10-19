<!--create un file index.php in cui:
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
 -->
<?php

include './models/movie.php';
include './db.php';



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
</head>

<body>

<h1 class="text-center text-danger fw-bold py-4">I MIEI FILM</h1>

    <div class="container">

        <div class="row pt-5">

            <?php foreach ($movies as $movie) : ?>

                <div class="col">

                    <div class="card text-white bg-secondary p-4">

                        <div class="card_body">
                            <h2>Titolo: <?= $movie->title ?> </h2>
                            <div>Lingua: <?= $movie->language ?> </div>
                            <div>Anno: <?= $movie->year ?> </div>
                            <div>
                                <span>Genere:</span>
                                <ul>
                                    <?php foreach ($movie->genres as $genre) : ?>
                                        <li> <?= $genre ?> </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>

                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->

            <?php endforeach ?>

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container -->



</body>

</html>