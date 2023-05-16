<?php
class Movie {
    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
    public $image;
    public $totalMovies = 1;
    public function __construct($id, $title, $original_title, $nationality, $date, $vote, $image) {
        $this->id = $id;
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
        $this->image = $image;
        $this->totalMovies += 1;
    }
    public function getAge() {
        $movieYear = (explode( '-', $this->date))[0];
        $age = date("Y") - intval($movieYear);
        return "$age years";
    }

}