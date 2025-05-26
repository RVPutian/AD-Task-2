
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokémon PC</title>
    <link rel="stylesheet" href="assets/css/PC_style.css">
</head>
<body>
    <div class="page-wrapper">
    <?php include   '../components/Header.php'; ?>

<?php
// Array of Pokémon (dictionary: name => [image, type])
$pokemon_pc = [
    [
        "name" => "Torterra",
        "image" => "assets/img/torterra.gif",
        "type" => "Grass/Ground"
    ],
    [
        "name" => "Honchkrow",
        "image" => "assets/img/honchkrow.gif",
        "type" => "Flying/Dark"
    ],
    [
        "name" => "Drapion",
        "image" => "assets/img/drapion.gif",
        "type" => "Poison"
    ]



];


$pokemon_types = ["Electric", "Grass", "Poison", "Fire", "Water", "Flying", "Psychic", "Dark", "Steel"];

// Function to display a Pokémon box
function display_pokemon($poke) {
    echo '<div class="pokemon-entry">';
    echo '<img src="' . $poke["image"] . '" alt="' . $poke["name"] . '">';
    echo '<div class="poke-name">' . $poke["name"] . '</div>';
    echo '<div class="poke-type">' . $poke["type"] . '</div>';
    echo '</div>';
}
?>
    <div class="main-pc-box">
        <div class="pc-header">PC</div>
        <div class="pokemon-list">
            <?php
            foreach ($pokemon_pc as $poke) {
                display_pokemon($poke);
            }
            ?>  
        </div>
        <div class="type-list">
            <strong>Types in PC:</strong>
            <?php foreach ($pokemon_types as $type): ?>
                <span class="type-badge"><?= $type ?></span>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include  '../components/Footer.php'; ?>
    </div>
</body>
</html>