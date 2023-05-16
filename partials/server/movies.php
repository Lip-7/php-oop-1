<?php
include __DIR__ . './settings.php';
include __DIR__ . '../../Models/Movie.php';
include __DIR__ . '../../Models/Moovie.php';

/* $newMovies = [
    new Movie(11, 'Shutter island', 'Shutter island', 'en', '2010-05-24', 9.5, 'https://pad.mymovies.it/filmclub/2009/03/099/locandina.jpg', 'thriller'),
    new Movie(12, 'La grande Bellezza', 'La grande Bellezza', 'it', '2013-03-22', 9.9, 'https://pad.mymovies.it/filmclub/2012/05/105/locandina.jpg', ['bello', 'bellissimo']),
]; */
$newMovies = [
    new Movie(11, 'Shutter island', 'Shutter island', 'en', '2010-05-24', 9.5, 'https://pad.mymovies.it/filmclub/2009/03/099/locandina.jpg', 'thriller'),
    new Movie(12, 'La grande Bellezza', 'La grande Bellezza', 'it', '2013-03-22', 9.9, 'https://pad.mymovies.it/filmclub/2012/05/105/locandina.jpg', ['bello', 'bellissimo']),
];

$result = Moovie::fetchAll($conn);
$popularMovies = [];
while ($row = $result->fetch_object('Moovie')) {
    $popularMovies[] = $row;
}
