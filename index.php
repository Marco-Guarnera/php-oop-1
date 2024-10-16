<?php

require_once __DIR__ . '/classes/Movie.php';

// Instances

$horror = new Genre('Horror');

$first_movie = new Movie('Non aprite quella porta', 'Marcus Nispel', 2003, [$horror]);
$second_movie = new Movie('Non aprite quella porta - L\'inizio', 'Jonathan Liebesman', 2006, [new Genre('Horror')]);

// Struttura dati
$movies_list = [$first_movie, $second_movie];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marco Guarnera">
    <meta name="description" content="PHP OOP">
    <!-- Title -->
    <title>PHP OOP</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Main Header -->
    <header id="main-header">
        <h1 class="text-center">PHP OOP</h1>
    </header>
    <!-- Main -->
    <main>
        <div class="container-fluid mb-3">
            <?php foreach ($movies_list as $movie) { ?>
                <div><?= $movie->get_title() ?></div>
            <?php } ?>
        </div>
    </main>
</body>

</html>

<?php

// Fase di produzione

var_dump($first_movie);
var_dump($second_movie);

?>