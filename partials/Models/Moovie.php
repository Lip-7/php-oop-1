<?php
class Moovie {
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
    public $image;
    public $genre;
    public $totalMovies = 1;
    public function __construct() {
        
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