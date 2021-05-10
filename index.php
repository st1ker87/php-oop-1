<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-first</title>
</head>

<body>

    <?php
    ini_set('display_errors', 1);

    // definisco la classe Movie
    class Movie
    {
        public $title;
        public $genre;
        public $poster_path;
        public $year;
        public $lang;
        public $actors;
        public $eta;

        // definisco un costruttore che mi restituirà l'anno del film e da quanti anni è stato prodotto
        public function __construct($year)
        {
            $this->year = $year;
            $this->eta = date('Y') - $year;
        }

        // definisco un metodo che mi restituisca il path del poster del film
        public function getPoster()
        {
            return $this->poster_path;
        }
    }

    $john_wick = new Movie(2014);
    $john_wick->title = 'John Wick';
    $john_wick->poster_path = 'https://cimazoom.com/wp-content/uploads/2019/09/John-Wick-2014.jpg';

    $slevin = new Movie(2006);
    $slevin->title = 'Lucky Number Slevin';
    $slevin->poster_path = 'https://pad.mymovies.it/filmclub/2006/02/300/locandinapg1.jpg';

    $rambo = new Movie(1982);
    $rambo->title = 'Rambo';
    $rambo->poster_path = 'https://pad.mymovies.it/filmclub/2006/02/308/locandina.jpg';
    ?>
    <div class="container">
        <div class="card">
            <h2><?php echo $rambo->title;  ?></h2>
            <img src="<?php echo $rambo->getPoster();  ?>" alt="">
            <p>
                <?php echo $rambo->title . ' è un film del ' . $rambo->year . '. E` stato prodotto ' . $rambo->eta . ' anni fa.'; ?>
            </p>
        </div>
        <div class="card">
            <h2><?php echo $john_wick->title;  ?></h2>
            <img src="<?php echo $john_wick->getPoster();  ?>" alt="">
            <p>
                <?php echo $john_wick->title . ' è un film del ' . $john_wick->year . '. E` stato prodotto ' . $john_wick->eta . ' anni fa.'; ?>
            </p>
        </div>
        <div class="card">
            <h2><?php echo $slevin->title;  ?></h2>
            <img src="<?php echo $slevin->getPoster();  ?>" alt="">
            <p>
                <?php echo $slevin->title . ' è un film del ' . $slevin->year . '. E` stato prodotto ' . $slevin->eta . ' anni fa.'; ?>
            </p>
        </div>
    </div>

</body>

</html>