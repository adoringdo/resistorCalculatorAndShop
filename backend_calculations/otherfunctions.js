function dropdownMenu() {
    var x = document.getElementById("dropdownClick");
    if (x.className === "dropdown-content") {
        x.className += " responsive"
    } else{
        x.className = "dropdown-content"
    }
}




// var a = document.getElementById('labelA');
// a.addEventListener('change', function() {
//   alert(this.value);
// }, false);



// function changeColor(e){
// labelA = document.getElementById('labelA').value;
// labelB = document.getElementById('labelB').value;
// labelC = document.getElementById('labelC').value;
// multiplier = document.getElementById('multiplier').value;
// tolerance = document.getElementById('tolerance').value;
// ppm = document.getElementById('ppm').value;


// const firstBand = document.querySelector('firstband');
// const secondBand = document.querySelector('secondband');
// const thirdBand = document.querySelector('thirdband');
// const fourthBand = document.querySelector('fourthband');
// const fifthBand = document.querySelector('fifthband');
// const sixthBand = document.querySelector('sixthband');
// const colorValues = {
//     1: 'red',
//     2: 'green',
//     3:  'blue',
// }

// console.log("it works!");
// labelA.addEventListener('input', () =>{
//     firstBand.style.backgroundColor = colorValues[labelA.value];
//     console.log('it works!');

// })}