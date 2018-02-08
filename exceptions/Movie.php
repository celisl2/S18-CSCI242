<?php


class Movie {
    private $title = "";
    private $runtime = 0;
    private $rating = "";
    
    public function __construct() {
        
    }

    public function getTitle() {
        return $this->title;
    }

    public function getRuntime() {
        return $this->runtime;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setRuntime($runtime) {
        $this->runtime = $runtime;
    }

    public function setRating($rating) {
        $this->rating = $rating;
    }


}
