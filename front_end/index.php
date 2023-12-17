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
    <title>Ohm Depot</title>
    <link rel="stylesheet" href="styles.css"/>
    <script src="../backend_calculations/otherfunctions.js?2" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
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
        echo '<a href="log-ins/log-out.php">' . $user_data['username'] . '</a>';
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
          <a href="log-ins/register.php">Registruotis</a>
        </div>';
    } ?>

    </div>
</nav>

<!-- Content -->
<div class="slogan">
    <div class="sloganText">
    <div class="backgroundas">
        <div class="sloganMain">
            <p>Sveiki atvykę į Ohm Depot elektroninę rezistorių parduotuvę!</p>
        </div>
        <div class="sloganAfter">Nuo mėgėjų iki profesionalų, mes esame pasiryžę suteikti Jums aukščiausios kokybės
            rezistorius už prieinamą kainą.
        </div>
        <form action="store/index.php" method="POST">
            <button type="submit" name="browseButton">Ieškoti &#187;</button>
        </form>
    </div>
    </div>
</div>

<div class="homeContent">
   
    <p>Mūsų rezistorių parduotuvė yra vieta, kur galite rasti platų rezistorių asortimentą ir profesionalią konsultaciją. Mes dedikuoti tiek elektronikos entuziastams, tiek profesionaliems elektronikos inžinieriams, suteikiant aukštos kokybės rezistorius visiems jų projektams ir eksperimentams.

Mūsų parduotuvėje rasite platų rezistorių pasirinkimą, įskaitant tiek SMD (paviršinio montavimo) rezistorius, tiek tradicinius tiesinius rezistorius. Mes stengiamės užtikrinti, kad mūsų prekių lentynose būtų daug skirtingų rezistorių reikšmių, galimybių ir galios vertės, kad galėtumėte atrasti tinkamiausią variantą jūsų projektui.

Mūsų profesionalus personalas visada pasirengęs atsakyti į jūsų klausimus ir padėti jums pasirinkti tinkamą rezistorių. Jei turite ypatingų reikalavimų arba ieškote specifinių rezistorių, mes stengsimės rasti jums tinkamą sprendimą ir užsakyti norimas prekes.

Be to, mes taip pat siūlome aukštos kokybės rezistorių komplektus, kurie yra puikus pasirinkimas pradedantiesiems arba tiems, kurie nori turėti plačią rezistorių įvairovę savo rankose. Tai puiki galimybė išplėsti savo žinias ir eksperimentuoti su įvairiomis elektronikos grandinėmis.

Mūsų parduotuvės tikslas yra užtikrinti jūsų elektronikos projektų sėkmę, teikiant aukštos kokybės rezistorius ir patyrusią pagalbą. Aplankykite mus ir atraskite rezistorių, kuris atitiks jūsų poreikius ir padės jums įgyvendinti jūsų idėjas!</p>

</div>


<!-- Footer -->
<footer class="footerContent">
    <div class="socialsText">Socialiniai tinklai</div>
    <div class="flex items-center justify-center">
        <a href="#facebook"><img src="../media/facebook-logo.png" alt=""></a>
        <a href="#whatsapp"><img src="../media/whatsapp-logo.png" alt=""></a>
        <a href="#youtube"><img src="../media/youtube-logo.png" alt=""></a>
    </div>
    <div class="copyright">Copyright &#169; 2023. Ohm Depot. All rights reserved</div>
</footer>
</body>
</html>
