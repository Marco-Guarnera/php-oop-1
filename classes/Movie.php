<?php

require_once __DIR__ . '/Genre.php';

// Class
class Movie {
    public string $title;
    public string $director;
    public int $release_year;
    public array $genres;

    public function __construct(string $title, string $director, int $release_year, array $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->release_year = $release_year;
        $this->genres = $genres;
    }

    public function get_title() : string {
        return $this->title;
    }
}

?>