
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="page-wrapper">
    <?php include '../../components/Header.php'; ?>
    
    <div class="main-container">
        <!-- Trainer Info -->
        <div class="trainer-info">
            <h2>Trainer Info</h2>
            <?php
            $name = "Ash Ketchum";
            $age = 10;
            echo "Name: $name<br>";
            echo "Age: $age<br>";
            ?>
        </div>

        <!-- Trainer Experience -->
        <div class="trainer-experience">
            <h2>Trainer Experience</h2>
            <?php
            if ($age < 18) {
                echo "You are a young Pokémon trainer!<br>";
            } else {
                echo "You are an experienced Pokémon trainer!<br>";
            }
            ?>
        </div>

        <!-- Pokémon Team -->
        <div class="pokemon-team">
            <h2>Pokémon Team</h2>
            <div class="pokemon-container">
                <div class="pokemon-box" data-name="Charizard"></div>
                <div class="pokemon-box" data-name="Gardevoir"></div>
                <div class="pokemon-box" data-name="Zoroark"></div>
                <div class="pokemon-box" data-name="Krookodile"></div>
                <div class="pokemon-box" data-name="Wishiwashi"></div>
                <div class="pokemon-box" data-name="Guzzlord"></div>
            </div>
        </div>
    </div>
     <?php include '../../components/Footer.php'; ?>
    </div>
</body>
</html>