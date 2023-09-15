<?php

require_once 'FlickFindsByFunction.php';

use PHPUnit\Framework\TestCase;

class FlickFindsByFunctionTest extends TestCase
{
    public function testGenerateRandomMovies(): void
    {
        $movies = getMovies();
        $randomMovies = generateRandomMovies(3, $movies);

        $this->assertCount(3, $randomMovies);

        foreach ($randomMovies as $movie) {
            $this->assertContains($movie, $movies);
        }
    }

    public function testFilterMoviesByStartingWithWithSpace(): void
    {
        $movies = getMovies();
        $filteredMovies = filterMoviesByStartingWith('W', true, $movies);

        $this->assertNotEmpty($filteredMovies);

        foreach ($filteredMovies as $movie) {
            $this->assertTrue(mb_strlen($movie) % 2 == 0);
        }
    }

    public function testFilterMoviesByStartingWithWithoutSpace(): void
    {
        $movies = getMovies();
        $filteredMovies = filterMoviesByStartingWith('w', false, $movies);

        $this->assertNotEmpty($filteredMovies);

        foreach ($filteredMovies as $movie) {
            $this->assertTrue(strlen(str_replace(' ', '', $movie)) % 2 == 0);
        }
    }

    public function testFilterMoviesByEvenNumberOfWords(): void
    {
        $movies = getMovies();
        $filteredMovies = filterMoviesByEvenNumberOfWords($movies);

        $this->assertNotEmpty($filteredMovies);

        foreach ($filteredMovies as $movie) {
            $this->assertTrue(str_word_count($movie) > 1);
        }
    }

    public function testFilterMoviesByStartingWithInvalidPrefix(): void
    {
        $movies = getMovies();
        $filteredMovies = filterMoviesByStartingWith('X', true, $movies);

        $this->assertEmpty($filteredMovies);
    }

    public function testFilterMoviesByEvenNumberOfWordsWithEmptyArray(): void
    {
        $movies = [];
        $filteredMovies = filterMoviesByEvenNumberOfWords($movies);

        $this->assertEmpty($filteredMovies);
    }
}

?>
