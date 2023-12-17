<?php

session_start();
include("log-ins/connections.php");
include("log-ins/functions.php");

$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>About</title>
    <link rel="stylesheet" href="styles.css"/>
    <script src="../backend_calculations/otherfunctions.js?2" defer></script>
</head>
<body>

<!-- Nav Bar -->

<nav>
    <div class="logo"><img src="../media/logo_transparent.png" alt=""/></div>
    <a href="index.php">Pradžia</a>
    <a href="calculator.php">Skaičiuoklė</a>
    <a href="store/index.php">Parduotuvė</a>
    <a href="about.php">Apie Mus</a>
    <a href="contacts.php">Kontaktai</a>
    <a href="store/cart.php" class="cart"><img src="../media/cart.png" alt=""></a>
    <?php if (!empty($user_data['username'])) {
        echo '<a href="">' . $user_data['username'] . '</a>';
    } else {
    } ?>

    <?php if (empty($user_data['username'])) {
        echo '<div class="dropdown"><a class="dropdownA" href="javascript:void(0);" onclick="dropdownMenu()"
        >&#9776;</a>';
    } ?>

    <?php if (!empty($user_data['username'])) {
        echo '<div class="dropdown"><a class="dropdownAhidden" href="javascript:void(0);" onclick="dropdownMenu()"
        >&#9776;</a>';
    } ?>

    <?php if (empty($user_data['username'])) {
        echo '<div class="dropdown-content" id="dropdownClick">
          <a href="log-ins/login.php">Prisijungti</a>
          <a href="log-ins/login.php">Registruotis</a>
        </div>';
    } ?>
    </div>
</nav>

<!-- Content -->

<div class="aboutImg"><img src="../media/circuit2.jpg" alt=""></div>

<div class="aboutContainer">
    <div class="aboutRow">
        <div class="aboutWhat">Kas yra Ohm Depot?</div>
        <div class="aboutInfo">Mūsų resistorių parduotuvė yra patikima ir profesionali įmonė, specializuojantiems
            resistorių produktų pardavime. Mes siūlome aukštos kokybės resistorius, pagamintus iš patikimų gamintojų,
            kad mūsų klientai galėtų būti tikri dėl produktų kokybės ir patikimumo.
            Mes suprantame, kad resistoriai yra esminis komponentas kiekvieno elektroninio projekto kūrimui, todėl mes
            stengiamės suteikti mūsų klientams didžiausią pasirinkimą ir kokybę.
            Mūsų tikslas yra užtikrinti, kad mūsų klientai gautų aukštos kokybės produktus už prieinamas kainas.
            Mes esame pasiruošę padėti jums pasiekti geriausius rezultatus ir įgyvendinti jūsų projektus sėkmingai!
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="footerContent">
    <div class="socialsText">Socialiniai tinklai</div>
    <div>
        <a href="#facebook"><img src="../media/facebook-logo.png" alt=""></a>
        <a href="#whatsapp"><img src="../media/whatsapp-logo.png" alt=""></a>
        <a href="#youtube"><img src="../media/youtube-logo.png" alt=""></a>
    </div>
    <div class="copyright">Copyright &#169; 2023. Ohm Depot. All rights reserved</div>
</footer>
</body>
</html>
