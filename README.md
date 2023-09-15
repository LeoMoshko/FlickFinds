# FlickFinds - Movie Processing Application

FlickFinds is a simple PHP application that offers several functions related to movie data processing.

## Functions

### 1. Random Movies

The `generateRandomMovies($n = 3, $movies = [])` function allows you to generate a random list of movies based on the available movie database. You can specify how many movies you want to generate. The function returns randomly selected movie titles.

#### Usage Example:

```php
$randomMovies = generateRandomMovies(5); // Generates 5 random movie titles.
```

### 2. Movie Filtering

The `filterMoviesByStartingWith($prefix = 'w', $withSpace = true, $movies = [])` function enables you to filter movies based on their titles. You can filter movies based on the first letter of the title, including or excluding spaces in the titles. The function returns a filtered list of movies.

#### Usage Example:

```php
// Filter movies starting with the letter "W" with spaces in titles
$filteredMovies = filterMoviesByStartingWith('W', true);

// Filter movies starting with the letter "w" without spaces in titles
$filteredMovies = filterMoviesByStartingWith('w', false);
```

### 3. Movies with Multiple Words

The `filterMoviesByEvenNumberOfWords($movies = [])` function allows you to display movies whose titles consist of more than one word. The function returns a list of movies that meet this criterion.

#### Usage Example:

```php
$multiWordMovies = filterMoviesByEvenNumberOfWords();
```

### 4. Running the Application
To use these functions, import the FlickFindsByFunction.php file into your PHP application and call the relevant functions as demonstrated in the examples above.

```php
require_once 'FlickFindsByFunction.php';

// Call the functions as needed
```

## Running Unit Tests

Run the PHPUnit tests using the following command:

```bash
path/to/your/phpunit FlickFindsByFunctionTest.php
```

## License
This project is licensed under the MIT License.

## Author
Leonid Moshko-Sanabia

Email: <a href="mailto:leomoshko@gmail.com" target="_new">leomoshko@gmail.com</a>