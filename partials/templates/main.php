<?php
include __DIR__ . '../../../partials/Models/Movie.php';
$newMovies = [
    new Movie(11, 'Shutter island', 'Shutter island', 'en', '2010-05-24', 9.5, 'https://pad.mymovies.it/filmclub/2009/03/099/locandina.jpg'),
    new Movie(12, 'La grande Bellezza', 'La grande Bellezza', 'it', '2013-03-22', 9.9, 'https://pad.mymovies.it/filmclub/2012/05/105/locandina.jpg'),
];
var_dump($newMovies[1]);
echo $newMovies[1]->getAge()
?>


<html>
<main>

</main>
</html>
