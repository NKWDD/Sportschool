<!DOCTYPE html>
<!--
 Auteur: Kamil Kala
 Datum: 6-03-2024
 Klas: IO1S1AV
 -->
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header met logo</title>
    <!-- Externe stylesheet toevoegen -->
    <link rel="stylesheet" href="stylesheet/styles.css">
    <!-- Externe JavaScript-bestand toevoegen -->
    <script src="javascript/script.js" defer></script>
</head>
<body>
<header>
    <!-- Navigatiesectie -->
    <div class="navigation">
        <!-- Logosectie -->
        <div class="logo">
            <img src="images/logo-trainstation-073-light.png" alt="Logo">
        </div>
        <!-- Lijst met navigatielinks -->
        <ul class="nav-links">
            <li><a href="#"><span class="grey-text">DE STATIONS</span></a></li>
            <li><a href="#"><span class="grey-text">LIDMAATSCHAPPEN</span></a></li>
            <li><a href="#"><span class="grey-text">ROOSTER</span></a></li>
            <li><a href="#"><span class="grey-text">OVER ONS</span></a></li>
            <li><a href="#"><span class="grey-text">BLOG</span></a></li>
            <li><a href="#"><span class="grey-text">CONTACT</span></a></li>
            <li><a href="#">INSCHRIJVEN</a></li>
            <li><a href="#">GRATIS 1 OP 1 INTRODUCTIE</a></li>
            <li><a href="./pages/Calculator.php">CALCULATOR</a></li>
        </ul>
    </div>
</header>

    <div class="container">
        <!-- Knop voor het navigeren naar links -->
        <div class="arrow l" onclick="prev()">
            <img src="./images/l.png" alt="l">
        </div>
        <!-- Dia's -->
        <div class="slide slide-1">
            <!-- Bannerbeeld -->
            <div class="banner">
                <img src="./images/banner-virtuele-tour-pink.png" alt="Banner afbeelding">
            </div>
            <!-- Dia-onderschrift -->
            <div class="caption">
                <!-- Geanimeerde tekst alinea -->
                <p class="animated-text-p">VECHT-  EN<br> VERDEDIGINGSSPORTEN</p>
                <div class="container">
                    <!-- Geanimeerde tekst kop -->
                    <div class="animated-text-h3">
                        <h3 class="text">B O X I N G &nbsp S T A T I O N</h3>
                    </div>
                </div>
                <!-- Knop om meer te lezen -->
                <button class="orange-button">LEES MEER</button>
            </div>
        </div>
        <!-- Vergelijkbare dia's met verschillende inhoud -->
        <!-- Dia 2 -->
        <div class="slide slide-2">
            <!-- Bannerbeeld -->
            <div class="banner">
                <img src="./images/banner-virtuele-tour-pink.png" alt="Banner afbeelding">
            </div>
            <!-- Dia-onderschrift -->
            <div class="caption">
                <!-- Geanimeerde tekst alinea -->
                <p class="animated-text-p">MAAK SPORTEN<br>WEER LEUK</p>
                <!-- Geanimeerde tekst kop -->
                <div class="animated-text-h3">
                    <h3 class="text">F U N &nbsp S T A T I O N</h3>
                </div>
                <!-- Knop om meer te lezen -->
                <button class="orange-button">LEES MEER</button>
            </div>
        </div>
        <!-- Dia 3 -->
        <div class="slide slide-3">
            <!-- Bannerbeeld -->
            <div class="banner">
                <img src="./images/banner-virtuele-tour-pink.png" alt="Banner afbeelding">
            </div>
            <!-- Dia-onderschrift -->
            <div class="caption">
                <!-- Geanimeerde tekst alinea -->
                <p class="animated-text-p">BREEK RECORDS</p>
                <!-- Geanimeerde tekst kop -->
                <div class="animated-text-h3">
                    <h3 class="text">P O W E R &nbsp S T A T I O N</h3>
                </div>
                <!-- Knop om meer te lezen -->
                <button class="orange-button">LEES MEER</button>
            </div>
        </div>
        <!-- Dia 4 -->
        <div class="slide slide-4">
            <!-- Bannerbeeld -->
            <div class="banner">
                <img src="./images/banner-virtuele-tour-pink.png" alt="Banner afbeelding">
            </div>
            <!-- Dia-onderschrift -->
            <div class="caption">
                <!-- Geanimeerde tekst alinea -->
                <p class="animated-text-p">TRAINSTATION 073</p>
                <!-- Geanimeerde tekst kop -->
                <div class="animated-text-h3">
                    <h3 class="text">1 &nbsp OP &nbsp 1 &nbsp I N T R O D U C T I E</h3>
                </div>
                <!-- Knop om een gratis introductie aan te vragen -->
                <button class="orange-button">GRATIS AANVRAGEN</button>
            </div>
        </div>
        <!-- Knop voor het navigeren naar rechts -->
        <div class="arrow r" onclick="next()">
            <img src="./images/r.png" alt="r">
        </div>
    </div>

</body>
</html>
