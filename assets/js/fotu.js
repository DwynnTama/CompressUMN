var buttons = document.getElementsByClassName('btn');


// Get the button that opens the modal
var btn = document.getElementsByClassName("img-cover");

var currentPosition = 0;
var currentMargin = 0;

function slideRight() {
    if (currentPosition != 0) {
        currentMargin += 25;
        slider.style.marginLeft = currentMargin + '%';
        currentPosition--;
    };
    if (currentPosition === 0) {
        buttons[0].classList.add('inactive');
    }
    if (currentPosition < 12) {
        buttons[1].classList.remove('inactive');
    }
};

function slideLeft() {
    if (currentPosition != 12) {
        currentMargin -= 25;
        slider.style.marginLeft = currentMargin + '%';
        currentPosition++;
    }
    if (currentPosition === 12) {
        buttons[1].classList.add('inactive');
    }
    if (currentPosition < 12) {
        buttons[0].classList.remove('inactive');
    }
};


var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
var modal5 = document.getElementById("myModal5");
var modal6 = document.getElementById("myModal6");
var modal7 = document.getElementById("myModal7");
var modal8 = document.getElementById("myModal8");
var modal9 = document.getElementById("myModal9");
var modal10 = document.getElementById("myModal10");
var modal11 = document.getElementById("myModal11");
var modal12 = document.getElementById("myModal12");
var modal13 = document.getElementById("myModal13");
var modal14 = document.getElementById("myModal14");
var modal15 = document.getElementById("myModal15");
 
 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close");
 
 // When the user clicks the button, open the modal 
 btn[0].onclick = function() {
   modal2.style.display = "block";
 }

 btn[1].onclick = function() {
   modal4.style.display = "block";
 }
 
 btn[2].onclick = function() {
   modal3.style.display = "block";
 }

 btn[3].onclick = function() {
   modal1.style.display = "block";
 }

 btn[4].onclick = function() {
   modal5.style.display = "block";
 }

 btn[5].onclick = function() {
   modal8.style.display = "block";
 }

 btn[6].onclick = function() {
   modal12.style.display = "block";
 }
 
 btn[7].onclick = function() {
   modal6.style.display = "block";
 }

 btn[8].onclick = function() {
   modal7.style.display = "block";
 }

 btn[9].onclick = function() {
   modal15.style.display = "block";
 }

 btn[10].onclick = function() {
   modal9.style.display = "block";
 }

 btn[11].onclick = function() {
   modal10.style.display = "block";
 }
 
 btn[12].onclick = function() {
   modal14.style.display = "block";
 }

 btn[13].onclick = function() {
   modal13.style.display = "block";
 }

 btn[14].onclick = function() {
   modal11.style.display = "block";
 }
 
 // When the user clicks on <span> (x), close the modal
 span[0].onclick = function() {
   modal1.style.display = "none";
 }
 span[1].onclick = function() {
   modal2.style.display = "none";
 }
 span[2].onclick = function() {
   modal3.style.display = "none";
 }
 span[3].onclick = function() {
   modal4.style.display = "none";
 }
 span[5].onclick = function() {
   modal6.style.display = "none";
 }
 span[6].onclick = function() {
   modal7.style.display = "none";
 }
 span[7].onclick = function() {
   modal8.style.display = "none";
 }
 span[8].onclick = function() {
   modal9.style.display = "none";
 }
 span[9].onclick = function() {
   modal10.style.display = "none";
 }
 span[10].onclick = function() {
   modal11.style.display = "none";
 }
 span[11].onclick = function() {
   modal12.style.display = "none";
 }
 span[12].onclick = function() {
   modal13.style.display = "none";
 }
 span[13].onclick = function() {
   modal14.style.display = "none";
 }
 span[14].onclick = function() {
   modal15.style.display = "none";
 }
 
 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
   if (event.target == modal1 || event.target == modal2 || event.target == modal3 || event.target == modal4 || event.target == modal5 || event.target == modal6 || event.target == modal7 || event.target == modal8 || event.target == modal9 || event.target == modal10 || event.target == modal11 || event.target == modal12 || event.target == modal13 || event.target == modal14 || event.target == modal15) {
     modal1.style.display = "none";
     modal2.style.display = "none";
     modal3.style.display = "none";
     modal4.style.display = "none";
     modal5.style.display = "none";
     modal6.style.display = "none";
     modal7.style.display = "none";
     modal8.style.display = "none";
     modal9.style.display = "none";
     modal10.style.display = "none";
     modal11.style.display = "none";
     modal12.style.display = "none";
     modal13.style.display = "none";
     modal14.style.display = "none";
     modal15.style.display = "none";
   }
 }