<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="manifest" href="webmanifest.json">
    <script src="index.js"></script>
    <script src="sensor.js"></script>
    




<style>

    body, html {
    height: 100%;
    margin: 0;
    }

    .ladebalken {
    height:33px;
    width: 350px;
    border:3px solid white;
    border-radius: 10px;
    margin:auto;
    margin-top: 20px;
    margin-bottom: 265px;
    }

    .fortschritt {
    height:33px;
    width: 0px; 
    background-color:rgb(26, 221, 0);
    border-radius: 10px; 
    border:none;
    }

    .buttonCenter{
    display: flex;
    justify-content: center;
    margin-top: -80px;
    }

    .oval {
    display: flex;
    width: 100%;
    height: 550px;
    border-radius: 300px / 100px;
    background-color: 	#206399;
    margin-top: -120px;
    }

    .oval1 {
    display: flex;
    width: 100%;
    height: 300px;
    border-radius: 300px / 100px;
    background: linear-gradient(to bottom, 	#206399, #4f94cd 80%, white);
    opacity: 0.4;
    margin-top: -200px;
    }
    
    .hbox {
    width: 100%;
    height: 130px;
    margin-top: -130px;
    background-color: 	#206399;
    }

    .headline {
    font-size: 60px;
    display: flex;
    justify-content: center;
    margin-top: -500px;
    }


    .underline {
    font-size: 35px;
    justify-content: center;
    display: flex;
    }

    
    

    .strecke {
    position: relative;
    font-size: 40px;
    left: 10%;
    top: -180px;
    }

    .Ustrecke {
    font-size: 25px;
    position: relative;
    left: 10%;
    top: -180px;
    }

    .geschwindigkeit {
    position: relative;
    font-size: 40px;
    left: 80%;
    top: -255px;
    }

    .Ugeschwindigkeit {
    position: relative;
    font-size: 25px;
    left: 80%;
    top: -255px;
    }

    .kalorien{
    position: relative;
    font-size: 40px;
    left: 40%;
    top: -290px;
    }

    .Ukalorien{
    position: relative;
    font-size: 25px;
    left: 40%;
    top: -290px;
    }

    
    
    .actionButton {
    position: relative;
    padding: 8px 21px;
    font-size: 70px;
    cursor: pointer;
    text-align: center;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 200px;
    top: -230px;
    }

    .center{
    justify-content: center;
    display: flex;
    }



    .hintergrund{
    background-image:url(bilder/watercolor.jpg);
    background-repeat: no-repeat;
    height: 100%;
    background-position: center;
    background-size: cover;
    }


</style>

</head>

<body class="hintergrund" onload="anzeigen()">

<?php require('allgemein/sidemenu.php'); ?>


<section class="start">
    <h1 class="title1">Schrittzähler</h1>
</section>
<div class="hbox"></div>
<div class="oval"></div>
<div class="oval1"></div>


<div id="Schritte">
        <b><span id="anzahlSchritte" class="headline"></span></b><br><span class="underline">Schritte</span>
</div>

<div id="ladebalken" class="ladebalken">
    <div id="fortschritt" class="fortschritt"></div>
</div>

<section>
<div>
    <b class="strecke"><span id="Strecke" >0</span></b><br> <span class="Ustrecke">Meter</span>
</div>

<div>
    <b class="geschwindigkeit"><span id="Geschwindigkeit">0 </span></b><br><span class="Ugeschwindigkeit">km/h</span>
</div>

<div>
    <b class="kalorien"><span id="Kalorien">0</span></b><br><span class="Ukalorien">Kalorien</span>
</div>
</section>
    
<section class="buttonCenter">
    <input type="button" onclick="addschritt()" value=" Schritt ">
</section>
    
<script>

  var erhoehe_pixel = 0;
  var ladevorgang = 0;
  var schritte = Number(localStorage.getItem("Schritte"));
  var ziel = Number(localStorage.getItem("schrittZiel"));
  var schrittLange = Number(localStorage.getItem("schrittLange"));
  //var schrittLange = 70;
  var Kal = 0.035;


  console.log(schritte);
  console.log(ziel);



function anzeigen(){
ziel = localStorage.getItem("schrittZiel");

setInterval(function() {
  anzahlSchritte.innerHTML = Number(localStorage.getItem("Schritte"));
  streckeBerechnen();
  kalorienBerechnen();
}, 100);

}



function streckeBerechnen(){
  var schrittLange = Number(localStorage.getItem("schrittLange"));
  var schritte = Number(localStorage.getItem("Schritte"));
  var strecke = (Math.round(((schrittLange / 100) * schritte)* 100) / 100);
  Strecke.innerHTML = strecke;
}

function kalorienBerechnen(){
  var Kal = 0.035;
  var schritte = Number(localStorage.getItem("Schritte"));
  var kalorien = (Math.round((Kal * schritte) * 100) / 100);
  Kalorien.innerHTML = kalorien;
}




function ladeBalken() {
var schrittZiel = Number(localStorage.getItem("schrittZiel"));
var schritte = Number(localStorage.getItem("Schritte")); 
var einSchritt = 350 / schrittZiel;
var schritt = document.getElementById("fortschritt");

erhoehe_pixel = schritte * einSchritt;

if (erhoehe_pixel <= 350) {
schritt.style.width = erhoehe_pixel + "px"; 
}else {
schritt.style.width = 350 + "px";
}
}

function addschritt() {
schritte = schritte + 1;
localStorage.setItem("Schritte", schritte);
anzahlSchritte.innerHTML = localStorage.getItem("Schritte");
ladeBalken();
}


if (window.addEventListener) {
  window.addEventListener("load", ladeBalken, false); // für alle anderen Browser
}
else if (window.attachEvent) {
  window.attachEvent("onload", ladeBalken);           // für ältere IE
}



</script>

    
<?php require('allgemein/footer.php'); ?>

    

</body>

</html>