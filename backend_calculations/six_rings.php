<?php
include("calculations.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resistance Calculator</title>
</head>

<body>
    <h3>Four rings</h3>
    <form action="six_rings.php" method="post">

        <label for="labelA">Label A </label>
        <select name="labelA" id="labelA">
            <option value="0">Black</option>
            <option value="1">Brown</option>
            <option value="2">Red</option>
            <option value="3">Orange</option>
            <option value="4">Yellow</option>
            <option value="5">Green</option>
            <option value="6">Blue</option>
            <option value="7">Violet</option>
            <option value="8">Gray</option>
            <option value="9">White</option>
        </select>
        <br>
        <label for="labelB">Label B </label>
        <select name="labelB" id="labelB">
            <option value="0">Black</option>
            <option value="1">Brown</option>
            <option value="2">Red</option>
            <option value="3">Orange</option>
            <option value="4">Yellow</option>
            <option value="5">Green</option>
            <option value="6">Blue</option>
            <option value="7">Violet</option>
            <option value="8">Gray</option>
            <option value="9">White</option>
        </select>
        <br>
        <label for="labelC">Label C </label>
        <select name="labelC" id="labelC">
            <option value="0">Black</option>
            <option value="1">Brown</option>
            <option value="2">Red</option>
            <option value="3">Orange</option>
            <option value="4">Yellow</option>
            <option value="5">Green</option>
            <option value="6">Blue</option>
            <option value="7">Violet</option>
            <option value="8">Gray</option>
            <option value="9">White</option>
        </select>
        <br>
        <label for="multiplier">Multiplier D</label>
        <select name="multiplier" id="multiplier">
            <option value="0.01">Silver</option>
            <option value="0.1">Gold</option>
            <option value="1">Black</option>
            <option value="10">Brown</option>
            <option value="100">Red</option>
            <option value="1000">Orange</option>
            <option value="10000">Yellow</option>
            <option value="100000">Green</option>
            <option value="1000000">Blue</option>
            <option value="10000000">Violet</option>
            <option value="100000000">Gray</option>
            <option value="1000000000">White</option>
        </select>
        <br>
        <label for="tolerance">Tolerance E</label>
        <select name="tolerance" id="tolerance">
            <option value="10%">Silver</option>
            <option value="5%">Gold</option>
            <option value="1%">Brown</option>
            <option value="2%">Red</option>
            <option value="0.5%">Green</option>
            <option value="0.25%">Blue</option>
            <option value="0.1%">Violet</option>
            <option value="0.05%">Gray</option>
        </select>
        <br>
        <label for="ppm">PPM</label>
        <select name="ppm" id="ppm">
            <option value="100 ppm">Brown</option>
            <option value="50 ppm">Red</option>
            <option value="15 ppm">Orange</option>
            <option value="25 ppm">Yellow</option>
            <option value="10 ppm">Blue</option>
            <option value="5 ppm">Violet</option>
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if (isset($_POST["labelA"]) && isset($_POST["labelB"]) && isset($_POST["labelC"]) && isset($_POST["multiplier"]) && isset($_POST["tolerance"]) && isset($_POST["ppm"])) {
        $labelA = $_POST["labelA"];
        $labelB = $_POST["labelB"];
        $labelC = $_POST["labelC"];
        $multiplier = $_POST["multiplier"];
        $tolerance = $_POST["tolerance"];
        $ppm = $_POST["ppm"];
        $result = calculateSixRings($labelA, $labelB, $labelC, $multiplier, $tolerance, $ppm);
        echo $result;
    }


    ?>
</body>

</html>