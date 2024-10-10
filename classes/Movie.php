<?php

// Class
class Movie {
    public string $title;
    public string $director;
    public int $year;

    public function __construct(string $title, string $director, int $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    public function get_title() : string {
        return $this->title;
    }
}

?>