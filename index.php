<?php

// ============================================================
// declaration
// ============================================================

$pepe = "Pepe";
$isDev = true;
$age = 10;

// ============================================================
// getting the type
// ============================================================

var_dump($pepe);
var_dump($isDev);
var_dump($age);

echo '<br>';

echo gettype($pepe);
echo gettype($isDev);
echo gettype($age);

echo '<br>';

echo is_string($pepe);
echo is_string($isDev);

echo '<br>';

// ============================================================
// typing variables
// ============================================================

echo is_bool($pepe);
echo is_bool($isDev);

$pepeForced = (string) "Pepe";
$ageForced = (int)25;

echo '<br><br>';

// ============================================================
// template string
// ============================================================

$output = "Hola $pepe, con edad de $age. 😀";
$secondOutput = "Hola \$pepe, con edad de \$age. 😀";


// ============================================================
// const
//      - use a specific file to do this
// ============================================================

define('URL_LOGO', 'https');
// ! don't duplicate
// define('URL_LOGO', 'https');

// local
//  - a nivel clase
//  - they are statics
const NOMBRE = '';


// ============================================================
// conditionals
// ============================================================

if ($age < 40) {
    echo '<h2>No eres viejo</h2>';
} else if ($isDev) {
    echo '<h2>SI eres viejo & eres DEV 👾</h2>';
} else {
    echo '<h2>X with you</h2>';
}

?>

<?php if ($isOLD) : ?>
    <h2>Eres viejo</h2>
<?php elseif ($isDev) : ?>
    <h2>nada mano 👾</h2>
<?php else : ?>
    <h2>Solo joven</h2>
<?php endif; ?>

<?php

$eresOLD = $age ? 'chale' : 'vaya';

$conditionalMatch = match ($age) {
    0, 12 => 'eres ninio 🧒',
    13, 18 => 'eres adolescente 🧑',
    19, 25 => 'eres Adulto 🧓',
    default => "no eres humano 🍌"
};

$conditionalMatchIF = match (true) {
    $age < 2 => 'eres ninio 🧒',
    $age < 18 => 'eres adolescente 🧑',
    $age < 50 => 'eres Adulto 🧓',
    default => "no eres humano 🍌"
}

?>



<h1>
    <?= $output ?>
    <br><br>
    <?= $secondOutput ?>
    <br><br>
    <?= $conditionalMatch ?>
    <br><br>
    <?= $$conditionalMatchIF ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>