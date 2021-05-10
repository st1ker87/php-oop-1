<?php
    ini_set('display_errors', 1);

    // definisco la classe Movie
    class Movie {
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
        public function getPoster() {
            return $this->poster_path;
        }
    }

    $john_wick = new Movie(2016);
    $rambo = new Movie(1990);
    $slevin = new Movie(2012);

    $rambo->title = 'Rambo';
    $rambo->poster_path = 'https://pad.mymovies.it/filmclub/2006/02/308/locandina.jpg';
    echo $rambo->title . ' è un film del ' . $rambo->year .'. E` uscito ' . $rambo->eta .' anni fa.';
?>