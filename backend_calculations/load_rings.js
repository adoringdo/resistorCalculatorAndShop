const selectors = document.querySelector('.colorSelectors');
const powerRes = document.querySelector('.powerResult');


// "4 ziedai" checked - load options


function load_4rings() {
    selectors.innerHTML=`<form action="" method="post" class="calculatorForm">
        
         <div class="calculator"><label for="labelA" class="ringsLabel">Label A </label>
         <select name="labelA" id="labelA" class="labelclass" onchange="firstbandChange()">
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
         <label for="labelB" class="ringsLabel">Label B </label>
         <select name="labelB" id="labelB" class="labelclass" onchange="secondbandChange()">
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
         <label for="multiplier" class="ringsLabel">Multiplier D</label>
         <select name="multiplier" id="multiplier" class="labelclass" onchange="fourthbandChange()">
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
         <label for="tolerance" class="ringsLabel">Tolerance E</label>
         <select name="tolerance" id="tolerance" class="labelclass" onchange="fifthbandChange()">
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
         <br>
        <input type="button" value="Skaičiuoti" onclick="calculateFourRings()" class="calculateButton">
       </div>
   </form>`
   document.getElementById("firstb").className = "band firstband black";
   document.getElementById("secondb").className = "band secondband black";
   document.getElementById("thirdb").className = "band thirdband black hiddenband";
   document.getElementById("fourthb").className = "band fourthband silver";
   document.getElementById("fifthb").className = "band fifthband silver hiddenband";
   document.getElementById("sixthb").className = "band sixthband silver";
   powerResu.innerHTML = '';
}

// "5 ziedai" checked - load options

function load_5rings() {
    selectors.innerHTML =`<form action="" method="post" class="calculatorForm">
        
    <div class="calculator"><label for="labelA" class="ringsLabel">Label A </label>
    <select name="labelA" id="labelA" class="labelclass" onchange="firstbandChange()">
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
    <label for="labelB" class="ringsLabel">Label B </label>
    <select name="labelB" id="labelB" class="labelclass" onchange="secondbandChange()">
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
    <label for="labelC" class="ringsLabel">Label C </label>
    <select name="labelC" id="labelC" class="labelclass" onchange="thirdbandChange()">
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
    <label for="multiplier" class="ringsLabel">Multiplier D</label>
    <select name="multiplier" id="multiplier" class="labelclass" onchange="fourthbandChange()">
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
    <label for="tolerance" class="ringsLabel">Tolerance E</label>
    <select name="tolerance" id="tolerance" class="labelclass" onchange="fifthbandChange()">
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
    <br>
    <input type="button" value="Skaičiuoti" onclick="calculateFiveRings()" class="calculateButton">
</div>
</form>`;
document.getElementById("firstb").className = "band firstband black";
document.getElementById("secondb").className = "band secondband black";
document.getElementById("thirdb").className = "band thirdband black";
document.getElementById("fourthb").className = "band fourthband silver";
document.getElementById("fifthb").className = "band fifthband silver hiddenband";
document.getElementById("sixthb").className = "band sixthband silver";
powerResu.innerHTML = '';
}

// "6 ziedai" checked - load options

function load_6rings() {
    selectors.innerHTML =`<form action="" method="post" class="calculatorForm">

    <div class="calculator"><label for="labelA" class="ringsLabel">Label A </label>
    <select name="labelA" id="labelA" class="labelclass" onchange="firstbandChange()">
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
    <label for="labelB" class="ringsLabel">Label B </label>
    <select name="labelB" id="labelB" class="labelclass" onchange="secondbandChange()">
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
    <label for="labelC" class="ringsLabel">Label C </label>
    <select name="labelC" id="labelC" class="labelclass" onchange="thirdbandChange()">
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
    <label for="multiplier" class="ringsLabel">Multiplier D</label>
    <select name="multiplier" id="multiplier" class="labelclass" onchange="fourthbandChange()">
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
    <label for="tolerance" class="ringsLabel">Tolerance E</label>
    <select name="tolerance" id="tolerance" class="labelclass" onchange="fifthbandChangeforsix()">
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
    <label for="ppm" class="ringsLabel">PPM</label>
    <select name="ppm" id="ppm" class="labelclass" onchange="sixthbandChange()">
        <option value="100 ppm">Brown</option>
        <option value="50 ppm">Red</option>
        <option value="15 ppm">Orange</option>
        <option value="25 ppm">Yellow</option>
        <option value="10 ppm">Blue</option>
        <option value="5 ppm">Violet</option>
    </select>
    <br>
    <input type="button" value="Skaičiuoti" onclick="calculateSixRings()" class="calculateButton">
    </div>
</form>`;
document.getElementById("firstb").className = "band firstband black";
document.getElementById("secondb").className = "band secondband black";
document.getElementById("thirdb").className = "band thirdband black";
document.getElementById("fourthb").className = "band fourthband silver";
document.getElementById("fifthb").className = "band fifthband silver";
document.getElementById("sixthb").className = "band sixthband brown";
powerResu.innerHTML = '';
}

