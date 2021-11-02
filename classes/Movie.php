<?php

class Movie {
    private $title;
    private $director;
    private $genre;
    private $duration;
    private $vote;
    private $releaseYear;

    public function __construct($_title, $_director, $_genre, $_duration, $_vote, $_releaseYear)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->vote = $_vote;
        $this->duration = $_duration;
        $this->releaseYear = $_releaseYear;
    }

    public function setGenre($_genre) {
        $this->genre = $_genre;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getReleaseYear() {
        return $this->releaseYear;
    }
}