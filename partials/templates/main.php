<?php
include __DIR__ . '../../../partials/Models/Movie.php';
$newMovies = [
    new Movie(11, 'Shutter island', 'Shutter island', 'en', '2010-05-24', 9.5, 'https://pad.mymovies.it/filmclub/2009/03/099/locandina.jpg'),
    new Movie(12, 'La grande Bellezza', 'La grande Bellezza', 'it', '2013-03-22', 9.9, 'https://pad.mymovies.it/filmclub/2012/05/105/locandina.jpg'),
];
/* var_dump($newMovies[1]);
echo $newMovies[1]->getAge() */
?>
<!-- <?php ?> -->

<html>
<main>
    <div class="container mx-auto">
        <div class="cards">
            <h2 class=" text-3xl font-black my-3">Ultime aggiunte</h2>
            <ul class="flex gap-3">
                <?php foreach ($newMovies as $movie) { ?>
                    <li class="rounded-md overflow-hidden">
                        <div class=" w-[300px] py-3">
                            <h4 class=" pl-2 text-xl font-bold mb-2"><?php echo $movie->title ?></h4>
                            <img class="block w-full" src="<?php echo $movie->image ?>" alt="<?php echo $movie->title ?>">
                            <h6 class=" pl-2 text-lg font-bold">Info:</h6>
                            <span class=" pl-2"></span><?php echo "nationality: $movie->nationality" ?></span>
                            <span class=" pl-2"><?php echo "vote: $movie->vote" ?></span>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</main>

</html>