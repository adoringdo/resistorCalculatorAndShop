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
    <title>Contacts</title>
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

<div class="contacts">
    <div class="contactsText">
        <div class="contactsMain"><p>Susisiekite su mumis! </p>
        </div>
        <div class="contactsAfter">Mūsų profesionali ir patyrusi komanda visada pasirengusi padėti klientams pasirinkti
            tinkamą produktą, atsakyti į klausimus ir suteikti reikiamą pagalbą.
        </div>

    </div>

</div>

<div class="contactsMainInfo">
    <div class="contactsInfo">
        <div class="phoneIcon"><img src="../media/phone-icon.png" alt=""></div>
        <div class="contactName">
            <h3>Tel. numeris</h3>
            <p>123 456-7890</p>
        </div>

    </div>
    <div class="contactsInfo">
        <div class="phoneIcon"><img src="../media/email-icon.png" alt=""/></div>
        <div class="contactName">
            <h3>El. paštas</h3>
            <p>sitename@email.com</p>
        </div>
    </div>
    <div class="contactsInfo">
        <div class="phoneIcon"><img src="../media/house-icon.png" alt=""/></div>
        <div class="contactName">
            <h3>Adresas</h3>
            <p>Gatvės g. 12, <br/>Vilnius, <br/>Vilniaus m. sav. <br/>10309</p>
        </div>
    </div>
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