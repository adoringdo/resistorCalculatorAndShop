<?php
include('../backend_calculations/calculations.php');

session_start();
include("log-ins/connections.php");
include("log-ins/functions.php");
//  include("result.php");
$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css"/>
    <script src="../backend_calculations/load_rings.js?2" defer></script>
    <script src="../backend_calculations/otherfunctions.js?2" defer></script>
    <script src="../backend_calculations/calculations.js?2" defer></script>
</head>
<body onload="load_4rings()">

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

<!-- Number of rings -->
<div class="calcContainer">
<div class="calculatorContent">
    <p>&nbsp;</p>
    <div class="ringsNr">
        <input type="radio" id="fourRings" name="rings" value="4rings" onclick="load_4rings()" checked="checked">
          <label for="fourRings">4 žiedai</label><br>
          <input type="radio" id="fiveRings" name="rings" value="5rings" onclick="load_5rings()">
          <label for="fiveRings">5 žiedai</label><br>
          <input type="radio" id="sixRings" name="rings" value="6rings" onclick="load_6rings()">
          <label for="sixRings">6 žiedai</label>
    </div>

    <!-- Load color selectors -->

    
    <div class="calculatorBox">
            <div><p class="colorSelectors"></p></div>
      <div class="calculatorColorsBox">
        <img src="../media/resistor-base.png" alt="">
        <div class="band firstband black" id="firstb"></div>
        <div class="band secondband black" id="secondb"></div>
        <div class="band thirdband black" id="thirdb"></div>
        <div class="band fourthband silver" id="fourthb"></div>
        <div class="band fifthband silver" id="fifthb"></div>
        <div class="band sixthband brown" id="sixthb"></div>
        <br>
        <div class="resultsText">
        <p>Rezistoriaus varža:</p>
        <p class="powerResult"></p>
        </div>
       </div>

    </div>
    <form action="store/productsMiddleware.php" method="POST">
        <input type="submit" value="Ieškoti &#187" name="find" class="findButton" onclick="on_callphp">
    </form>

</div>
    <div class="tableBox">
        <h2>Spalvų reikšmės</h2>
        <img src="../media/tablerezis.png" alt="">
    </div>
    </div>

    <div class="resistorInfoContainer">
        <h1>Rezistorių spalvinis žymėjimas</h1>
        <p>Atitinkamai pagal GOST175-72 stadartus ir 62 IEC (Tarptautinės Elektrotechnikos Komisijos) reikalavimus spalvinis žymėjimas atliekamas 3-ų, 4-ų (1 pav.), 5-ų ar 6-ų (2 pav.) spalvotų žiedų pagalba.
             Žiedai turi būti arčiau kurio nors krašto arba pirmo žiedo plotis turi būti dvigubai didesnis už kitų, kas praktikoje yra ne visada. 
            Vietoj žiedų kartais naudojami spalvoti taškai, bet žymėjimo principas išlieka tas pats.</p>
        <img src="../media/trys.jpg" alt="">
        <p>1 pav. Trijų arba keturių žymių sistema pažymėti rezistoriai.</p>
        <img src="../media/penki.jpg" alt="">
        <p>2 pav. Penkių arba šešių žymių sistema pažymėti rezistoriai.</p>
        <h2>Trijų arba keturių žymių sistema</h2>
        <p>Išilgai rezistoriaus dedamos trys arba keturios spalvotos žymės (arba spalvoti rezistorių juosiantys žiedai), toliau žymimi raidėmis A, B, D ir E (žr. 3 pav.), kur:</p>
        <p>- A yra pirmas varžos omais skaitmuo.<br>
    - B yra antras varžos omais skaitmuo.<br>
    - D yra dešimtainis daugiklis.<br>
    - E, jei yra, nurodo rezistoriaus varžos garantuotą tikslumą procentais. Jei šios žymės nėra, varžos tikslumas yra ± 20 procentų.<br>
    - Karinėje pramonėje naudojami rezistoriai turi penktą žymę, kuri nurodo rezistoriaus patikimumą pagal MIL-STD-199 standartą.</p>
        <p>Kadangi A žymė yra arčiau rezistoriaus kontakto nei E žymė, todėl užrašo negalima per klaidą perskaityti „atvirkščiai“. Kitais atvejais (dažniausiai žymint rites) prieš A žymę dedama plati auksinė arba sidabrinė žymė.</p>
        <h2>Penkių arba šešių ženklų sistema</h2>
        <p>Ši sistema, taikoma jei parametro reikšmę būtina nurodyti tiksliau, turi vieną papildomą skaitmenį (trečią):</p>
        <p>- A Pirmas skaitmuo<br>
            - B Antras skaitmuo<br>
            - C Trečias skaitmuo<br>
            - D Dešimtainis daugiklis<br>
            - E Tikslumas procentais<br>
            - F Jei yra, nurodo temperatūrinį parametro kitimo koeficientą.</p>
        <p>Spalvinių kodų reikšmės (pagal EIA-RS-279) yra tokios:</p>
        <img src="../media/reiksmes.png" alt="">
        <p>3 pav. Spalvinių kodų reikšmės.</p>







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

<script>

function firstbandChange(){

if (document.getElementById('labelA').value == "0"){
document.getElementById("firstb").className = "band firstband black";
}
else if (document.getElementById('labelA').value == "1"){
document.getElementById("firstb").className = "band firstband brown";
}
else if (document.getElementById('labelA').value == "2"){
document.getElementById("firstb").className = "band firstband red";
}
else if (document.getElementById('labelA').value == "3"){
document.getElementById("firstb").className = "band firstband orange";
}
else if (document.getElementById('labelA').value == "4"){
document.getElementById("firstb").className = "band firstband yellow";
}
else if (document.getElementById('labelA').value == "5"){
document.getElementById("firstb").className = "band firstband green";
}
else if (document.getElementById('labelA').value == "6"){
document.getElementById("firstb").className = "band firstband blue";
}
else if (document.getElementById('labelA').value == "7"){
document.getElementById("firstb").className = "band firstband purple";
}
else if (document.getElementById('labelA').value == "8"){
document.getElementById("firstb").className = "band firstband gray";
}
else if (document.getElementById('labelA').value == "9"){
document.getElementById("firstb").className = "band firstband white";
}
};

function secondbandChange(){

    if (document.getElementById('labelB').value == "0"){
document.getElementById("secondb").className = "band secondband black";
}
else if (document.getElementById('labelB').value == "1"){
document.getElementById("secondb").className = "band secondband brown";
}
else if (document.getElementById('labelB').value == "2"){
document.getElementById("secondb").className = "band secondband red";
}
else if (document.getElementById('labelB').value == "3"){
document.getElementById("secondb").className = "band secondband orange";
}
else if (document.getElementById('labelB').value == "4"){
document.getElementById("secondb").className = "band secondband yellow";
}
else if (document.getElementById('labelB').value == "5"){
document.getElementById("secondb").className = "band secondband green";
}
else if (document.getElementById('labelB').value == "6"){
document.getElementById("secondb").className = "band secondband blue";
}
else if (document.getElementById('labelB').value == "7"){
document.getElementById("secondb").className = "band secondband purple";
}
else if (document.getElementById('labelB').value == "8"){
document.getElementById("secondb").className = "band secondband gray";
}
else if (document.getElementById('labelB').value == "9"){
document.getElementById("secondb").className = "band secondband white";
}
};

function thirdbandChange(){

    if (document.getElementById('labelC').value == "0"){
document.getElementById("thirdb").className = "band thirdband black";
}
else if (document.getElementById('labelC').value == "1"){
document.getElementById("thirdb").className = "band thirdband brown";
}
else if (document.getElementById('labelC').value == "2"){
document.getElementById("thirdb").className = "band thirdband red";
}
else if (document.getElementById('labelC').value == "3"){
document.getElementById("thirdb").className = "band thirdband orange";
}
else if (document.getElementById('labelC').value == "4"){
document.getElementById("thirdb").className = "band thirdband yellow";
}
else if (document.getElementById('labelC').value == "5"){
document.getElementById("thirdb").className = "band thirdband green";
}
else if (document.getElementById('labelC').value == "6"){
document.getElementById("thirdb").className = "band thirdband blue";
}
else if (document.getElementById('labelC').value == "7"){
document.getElementById("thirdb").className = "band thirdband purple";
}
else if (document.getElementById('labelC').value == "8"){
document.getElementById("thirdb").className = "band thirdband gray";
}
else if (document.getElementById('labelC').value == "9"){
document.getElementById("thirdb").className = "band thirdband white";
}

};

function fourthbandChange(){
if (document.getElementById('multiplier').value == "0.01"){
document.getElementById("fourthb").className = "band fourthband silver";
}
else if (document.getElementById('multiplier').value == "0.1"){
document.getElementById("fourthb").className = "band fourthband gold";
}
else if (document.getElementById('multiplier').value == "1"){
document.getElementById("fourthb").className = "band fourthband black";
}
else if (document.getElementById('multiplier').value == "10"){
document.getElementById("fourthb").className = "band fourthband brown";
}
else if (document.getElementById('multiplier').value == "100"){
document.getElementById("fourthb").className = "band fourthband red";
}
else if (document.getElementById('multiplier').value == "1000"){
document.getElementById("fourthb").className = "band fourthband orange";
}
else if (document.getElementById('multiplier').value == "10000"){
document.getElementById("fourthb").className = "band fourthband yellow";
}
else if (document.getElementById('multiplier').value == "100000"){
document.getElementById("fourthb").className = "band fourthband green";
}
else if (document.getElementById('multiplier').value == "1000000"){
document.getElementById("fourthb").className = "band fourthband blue";
}
else if (document.getElementById('multiplier').value == "10000000"){
document.getElementById("fourthb").className = "band fourthband purple";
}
else if (document.getElementById('multiplier').value == "100000000"){
document.getElementById("fourthb").className = "band fourthband gray";
}
else if (document.getElementById('multiplier').value == "1000000000"){
document.getElementById("fourthb").className = "band fourthband white";
}
};

function fifthbandChange(){
if (document.getElementById('tolerance').value == "10%"){
document.getElementById("sixthb").className = "band sixthband silver";
}
else if (document.getElementById('tolerance').value == "5%"){
document.getElementById("sixthb").className = "band sixthband gold";
}
else if (document.getElementById('tolerance').value == "1%"){
document.getElementById("sixthb").className = "band sixthband brown";
}
else if (document.getElementById('tolerance').value == "2%"){
document.getElementById("sixthb").className = "band sixthband red";
}
else if (document.getElementById('tolerance').value == "0.5%"){
document.getElementById("sixthb").className = "band sixthband green";
}
else if (document.getElementById('tolerance').value == "0.25%"){
document.getElementById("sixthb").className = "band sixthband blue";
}
else if (document.getElementById('tolerance').value == "0.1%"){
document.getElementById("sixthb").className = "band sixthband purple";
}
else if (document.getElementById('tolerance').value == "0.05%"){
document.getElementById("sixthb").className = "band sixthband gray";
}

};

function fifthbandChangeforsix(){
    if (document.getElementById('tolerance').value == "10%"){
document.getElementById("fifthb").className = "band fifthband silver";
}
else if (document.getElementById('tolerance').value == "5%"){
document.getElementById("fifthb").className = "band fifthband gold";
}
else if (document.getElementById('tolerance').value == "1%"){
document.getElementById("fifthb").className = "band fifthband brown";
}
else if (document.getElementById('tolerance').value == "2%"){
document.getElementById("fifthb").className = "band fifthband red";
}
else if (document.getElementById('tolerance').value == "0.5%"){
document.getElementById("fifthb").className = "band fifthband green";
}
else if (document.getElementById('tolerance').value == "0.25%"){
document.getElementById("fifthb").className = "band fifthband blue";
}
else if (document.getElementById('tolerance').value == "0.1%"){
document.getElementById("fifthb").className = "band fifthband purple";
}
else if (document.getElementById('tolerance').value == "0.05%"){
document.getElementById("fifthb").className = "band fifthband gray";
}
};

function sixthbandChange(){
if (document.getElementById('ppm').selectedIndex == "0"){
document.getElementById("sixthb").className = "band sixthband brown";
}
else if (document.getElementById('ppm').selectedIndex == "1"){
document.getElementById("sixthb").className = "band sixthband red";
}
else if (document.getElementById('ppm').selectedIndex == "2"){
document.getElementById("sixthb").className = "band sixthband orange";
}
else if (document.getElementById('ppm').selectedIndex == "3"){
document.getElementById("sixthb").className = "band sixthband yellow";
}
else if (document.getElementById('ppm').selectedIndex == "4"){
document.getElementById("sixthb").className = "band sixthband blue";
}
else if (document.getElementById('ppm').selectedIndex == "5"){
document.getElementById("sixthb").className = "band sixthband purple";
}
};

//     const firstBand = document.querySelector('firstband');
//     const colorValues = {
//     0: 'red',
//     1: 'green',
//     2:  'blue',
// }
// labelAband = document.getElementById('labelA');
// labelAband.addEventListener('input', () =>{
//     firstBand.style.backgroundColor = colorValues[labelAband.value];

// })

</script>
</body>
</html>