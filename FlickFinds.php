<?php

$movies = [
  "Pulp Fiction",
  "Incepcja",
  "Skazani na Shawshank",
  "Dwunastu gniewnych ludzi",
  "Ojciec chrzestny",
  "Django",
  "Matrix",
  "Leon zawodowiec",
  "Siedem",
  "Nietykalni",
  "Władca Pierścieni: Powrót króla",
  "Fight Club",
  "Forrest Gump",
  "Chłopaki nie płaczą",
  "Gladiator",
  "Człowiek z blizną",
  "Pianista",
  "Doktor Strange",
  "Szeregowiec Ryan",
  "Lot nad kukułczym gniazdem",
  "Wielki Gatsby",
  "Avengers: Wojna bez granic",
  "Życie jest piękne",
  "Pożegnanie z Afryką",
  "Szczęki",
  "Milczenie owiec",
  "Dzień świra",
  "Blade Runner",
  "Labirynt",
  "Król Lew",
  "La La Land",
  "Whiplash",
  "Wyspa tajemnic",
  "Django",
  "American Beauty",
  "Szósty zmysł",
  "Gwiezdne wojny: Nowa nadzieja",
  "Mroczny Rycerz",
  "Władca Pierścieni: Drużyna Pierścienia",
  "Harry Potter i Kamień Filozoficzny",
  "Green Mile",
  "Iniemamocni",
  "Shrek",
  "Mad Max: Na drodze gniewu",
  "Terminator 2: Dzień sądu",
  "Piraci z Karaibów: Klątwa Czarnej Perły",
  "Truman Show",
  "Skazany na bluesa",
  "Infiltracja",
  "Gran Torino",
  "Spotlight",
  "Mroczna wieża",
  "Rocky",
  "Casino Royale",
  "Drive",
  "Piękny umysł",
  "Władca Pierścieni: Dwie wieże",
  "Zielona mila",
  "Requiem dla snu",
  "Forest Gump",
  "Requiem dla snu",
  "Milczenie owiec",
  "Czarnobyl",
  "Breaking Bad",
  "Nędznicy",
  "Seksmisja",
  "Pachnidło",
  "Nagi instynkt",
  "Zjawa",
  "Igrzyska śmierci",
  "Kiler",
  "Siedem dusz",
  "Dzień świra",
  "Upadek",
  "Lśnienie",
  "Pan życia i śmierci",
  "Gladiator",
  "Granica",
  "Hobbit: Niezwykła podróż",
  "Pachnidło: Historia mordercy",
  "Wielki Gatsby",
  "Titanic",
  "Sin City",
  "Przeminęło z wiatrem",
  "Królowa śniegu",
];

// random n films names
$randomsTitles = array_rand(array_flip($movies), 3);

// recomendation by start "w" and even number charters with spase
$titlesByStartWandEvenNumberWithSpace = array_filter($movies, function ($title) {
  return (str_starts_with($title, 'W') || str_starts_with($title, 'w')) && mb_strlen($title) % 2 == 0;
});

// recomendation by start "w" and even number charters without spase
$titlesByStartWandEvenNumberWithOutSpace = array_filter($movies, function ($title) {
  return (str_starts_with($title, 'W') || str_starts_with($title, 'w')) && strlen(str_replace(' ', '', $title)) % 2 == 0;
});

// recomendation by consist of more than 1 word 
$titlesByConsistOfMoreOneWord = array_filter($movies, function ($title) {
  return str_word_count($title) > 1;
});

// show on terminal
echo "1) Losowe filmy: " . implode(', ', $titlesByStartWandEvenNumberWithSpace) . PHP_EOL;
echo "2.A) Filmy na literę W z parzystą liczbą znaków z uzwgłędnieniem spacji: " . implode(', ', $titlesByStartWandEvenNumberWithOutSpace) . PHP_EOL;
echo "2.B) Filmy na literę W z parzystą liczbą znaków bez uzwgłędnienia spacji: " . implode(', ', $titlesByStartWandEvenNumberWithOutSpace) . PHP_EOL;
echo "3) Filmy z wieloma słowami: " . implode(', ', $titlesByConsistOfMoreOneWord) . PHP_EOL;

?>
