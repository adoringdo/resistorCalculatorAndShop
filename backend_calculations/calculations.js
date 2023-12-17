const powerResu = document.querySelector('.powerResult');

let labelA;
let labelB;
let labelC;
let multiplier;
let tolerance;
let ppm;
let power;

function calculateFourRings()
{
   labelA = document.getElementById('labelA').value;
   labelB = document.getElementById('labelB').value;
   multiplier = document.getElementById('multiplier').value;
   tolerance = document.getElementById('tolerance').value;
   rings = 4;


    power = ((parseInt(labelA) * 10) + parseInt(labelB)) * multiplier;
    powerResu.innerHTML = prettifyCalculationsResult(power) + ' ' + tolerance;;
    // document.cookie="power";
    // return prettifyCalculationsResult(power)+tolerance;
    document.cookie = "cookiepower=" + power;
    document.cookie = "cookierings=" + rings;
}

function calculateFiveRings()
{
   labelA = document.getElementById('labelA').value;
   labelB = document.getElementById('labelB').value;
   labelC = document.getElementById('labelC').value;
   multiplier = document.getElementById('multiplier').value;
   tolerance = document.getElementById('tolerance').value;
   rings = 5;
    

   power = ((parseInt((parseInt(labelA) * 100)) + parseInt((parseInt(labelB) * 10))) + parseInt(labelC)) * multiplier;
    powerResu.innerHTML = prettifyCalculationsResult(power) + ' ' + tolerance;
    // document.cookie="power";
    // innerhtml =  prettifyCalculationsResult(power)+tolerance;
    document.cookie = "cookiepower=" + power;
    document.cookie = "cookierings=" + rings;
}

function calculateSixRings()
{
   labelA = document.getElementById('labelA').value;
   labelB = document.getElementById('labelB').value;
   labelC = document.getElementById('labelC').value;
   multiplier = document.getElementById('multiplier').value;
   tolerance = document.getElementById('tolerance').value;
   ppm = document.getElementById('ppm').value;
    

   power = calculateFiveRings();
    powerResu.innerHTML += ` ${ppm}`;
    document.cookie = "cookierings=" + 6;
  // document.cookie="power";
    // return prettifyCalculationsResult(power)+tolerance;
}


function prettifyCalculationsResult(power) {
    const precision = 2;
    let n_format;
    let suffix = '';
    if (power < 999) {
      n_format = power.toFixed(precision);
      suffix = '';
    } else if (power < 999999) {
      n_format = (power / 1000).toFixed(precision);
      suffix = 'K';
    } else if (power < 999999999) {
      n_format = (power / 1000000).toFixed(precision);
      suffix = 'M';
    } else {
      n_format = (power / 1000000000).toFixed(precision);
      suffix = 'G';
    }
    if (precision > 0) {
      const dotzero = '.' + '0'.repeat(precision);
      n_format = n_format.replace(dotzero, '');
    }
    return n_format + suffix + ' Ohms ';
  }



// function prettifyCalculationsResult(power)
// {
//     let precision = 2;
//     let n_format;
//     let suffix;
//     if (power < 999) {
//         n_format = number_format(power, precision);
//         suffix   = '';
//     } else if (power < 999999) {
        
//         n_format = number_format(power / 1000, precision);
//         suffix   = 'K';
//     } else if (power < 999999999) {
        
//         n_format = number_format(power / 1000000, precision);
//         suffix   = 'M';
//     } else {
//         n_format = number_format(power / 1000000000, precision);
//         suffix   = 'G';
//     }
    
//     if (precision > 0) {
//         dotzero  = '.' . str_repeat('0', precision);
//         n_format = str_replace(dotzero, '', n_format);
//     }
    


//     return n_format + suffix + ' Ohms ';
// }




// function get4rings() {
// document.getElementById('selectid').value;}
