<?php
class Movie {
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
    public $image;
    public $genre;
    public $totalMovies = 1;
    public function __construct($id, $title, $original_title, $nationality, $date, $vote, $image, $genre = null) {
        $this->id = $id;
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
        $this->image = $image;
        $this->genre = $genre;
        $this->countMovies();
    }
    public function getAge() {
        $movieYear = (explode( '-', $this->date))[0];
        $age = date("Y") - intval($movieYear);
        return "$age years";
    }
    public function countMovies() {
        $this->totalMovies += 1;
    }
    public static function fetchAll($conn)
    {
        $sql = "SELECT * FROM  `movies`";
        $result = $conn->query($sql);
        return $result;
    }
}