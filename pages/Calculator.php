<!DOCTYPE html>
<!--
 Auteur: Kamil Kala
 Datum: 6-03-2024
 Klas: IO1S1AV
 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header met logo</title>
    <link rel="stylesheet" href="../stylesheet/styles.css">
    <script src="../javascript/script.js"></script>
</head>
<body>
<header>
    <div class="navigation">
        <div class="logo">
            <img src="../images/logo-trainstation-073-light.png" alt="Logo">
        </div>
        <ul class="nav-links">
            <li><a href="../index.php"><span class="grey-text">DE STATIONS</span></a></li>
            <li><a href="#"><span class="grey-text">LIDMAATSCHAPPEN</span></a></li>
            <li><a href="#"><span class="grey-text">ROOSTER</span></a></li>
            <li><a href="#"><span class="grey-text">OVER ONS</span></a></li>
            <li><a href="#"><span class="grey-text">BLOG</span></a></li>
            <li><a href="#"><span class="grey-text">CONTACT</span></a></li>
            <li><a href="#">INSCHRIJVEN</a></li>
            <li><a href="#">GRATIS 1 OP 1 INTRODUCTIE</a></li>
            <li><a href="../pages/Calculator.php">CALCULATOR</a></li>
        </ul>
    </div>
</header>

<div class="calculator">
    <h2>Calorie Calculator</h2>
    <form method="post">
        <label for="gender">Geslacht:</label>
        <select id="gender" name="gender" required>
            <option value="male">Man</option>
            <option value="female">Vrouw</option>
        </select>
        <label for="weight">Gewicht (kg):</label>
        <input type="number" id="weight" name="weight" required>
        <label for="height">Lengte (cm):</label>
        <input type="number" id="height" name="height" required>
        <label for="age">Leeftijd:</label>
        <input type="number" id="age" name="age" required>
        <label for="activity">Activiteitenniveau:</label>
        <select id="activity" name="activity" required>
            <option value="1.2">Weinig of geen beweging</option>
            <option value="1.375">Licht actief sport 1-3 dagen per week</option>
            <option value="1.55">Gemiddeld actief sport 3-5 dagen per week</option>
            <option value="1.725">Erg actief sport 6-7 dagen per week</option>
            <option value="1.9">Extreem actief zware sport en fysieke baan</option>
        </select>
        <input type="submit" value="Bereken Calorieën">
    </form>

    <?php
    // Bereken calorieën wanneer het formulier wordt ingediend
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $age = $_POST["age"];
        $activity = $_POST["activity"];
        $gender = $_POST["gender"];

        // Bereken calorieën met formule, rekening houdend met geslacht
        if ($gender == "male") {
            $calories = round((66 + (13.75 * $weight) + (5 * $height) - (6.75 * $age)) * $activity);
        } else {
            $calories = round((655 + (9.563 * $weight) + (1.850 * $height) - (4.676 * $age)) * $activity);
        }

        echo "<p>Je dagelijkse caloriebehoefte is: $calories calorieën.</p>";
    }
    ?>
</div>
</body>
</html>