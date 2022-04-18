<!DOCTYPE html>
<html lang="en">
<head>

<?php require("allgemein/config.php"); ?>

<script>
var anzahlGl = Number(localStorage.getItem("Glas"));
console.log(anzahlGl);


function wasserGetrunken(){
    anzahlGl = anzahlGl + 1;
    localStorage.setItem("Glas", anzahlGl);
    anzahlGläser.innerHTML = localStorage.getItem("Glas");
    ladeBalken();    
}

function anzeigen(){
    anzahlGläser.innerHTML = Number(localStorage.getItem("Glas"));
    ladeBalken();
}


function ladeBalken() {
    var Ziel = Number(localStorage.getItem("gewicht")) * 0.04;
    //var Ziel = 80 * 0.04;
    var benötigteGlaser = Math.round(Ziel / 0.2);
    var Glaser = Number(localStorage.getItem("Glas")); 
    var einSchritt = 325 / benötigteGlaser;
    var schritt = document.getElementById("fortschritt");
    var nochbenötigteGlaser = benötigteGlaser - Glaser;

    localStorage.setItem("wasserziel", benötigteGlaser);

    if (nochbenötigteGlaser >= 0){
        localStorage.setItem("wasserdifferenz", nochbenötigteGlaser);
    }

    erhoehe_pixel = Glaser * einSchritt;

    if (erhoehe_pixel <= 325) {
        schritt.style.width = erhoehe_pixel + "px"; 
    }else {
        schritt.style.width = 325 + "px";
    }
}

setInterval( function(){

var datum  = new Date();
var month    = datum.getMonth();
var day      = datum.getDate();
var hours    = datum.getHours();
var minut    = datum.getMinutes();
var second   = datum.getSeconds();
var i = localStorage.getItem("gesendet");

var Ziel = Number(localStorage.getItem("gewicht")) * 0.04;
//var Ziel = 80 * 0.04;
var benötigteGlaser = Math.round(Ziel / 0.2);
var Glaser = Number(localStorage.getItem("Glas"));
var nochbenötigteGlaser = benötigteGlaser - Glaser;

if (12 < hours && i == false) {
  localStorage.setItem("gesendet", true);
  
  displayNotification("Du hast heute noch nicht genug getrunken! Du musst noch " + nochbenötigteGlaser + " trinken.");

}
}, 1000);


</script>

<style>
    body, html {
    height: 100%;
    margin: 0;
    }

    .start {
        margin: 0;
    }

    .fhead{
    height: 75px;
    background-color: rgba(245, 240, 240, 0.7);
    }

    .head{
    height: 450px;
    width: 100%;
    margin-bottom: 0px;
    background-color: rgba(245, 240, 240, 0.7);
    border-radius: 0 0 30px 30px;
    }

    .hintergrund{
    background-image:url(bilder/drop.jpg);
    background-repeat: no-repeat;
    height: 100%;
    background-position: center;
    background-size: cover;
    }
    
    .center{
    display: flex;
    justify-content: center;
    }

    .wasserFeld{
    background-color: #25758d;
    border-radius: 15px;
    height: 250px;
    width: 350px;
    margin-top: -325px;
    }


    .überschrift{
        text-align: center;
        font-size: 27px;
        margin: 0;
    }
    
    .wasserubersicht{
        font-size: 22.5px;
        margin-top: 40px;
        margin-left: 5px;
        background-color: #25758d;
        border-radius: 15px;
        width: 215px;
    }
    
    .button {
        font-size: 30px;
        color: black;
        background-color: #33cc99;
        border: none;
        color: white;
        padding: 5px 7.5px;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        border-radius: 7.5px;
        margin-top: 40px;
    }

    .iconWasser{
        width: 150px;
        height: 150px;
        margin-top: -170px;
        margin-left: 200px;
    }


    .ladebalken {
    height: 30px;
    width: 325px;
    border: 2.5px solid white;
    border-radius: 10px;
    margin: auto;
    margin-top: 20px;
    margin-bottom: 200px;
    }

    .fortschritt {
    height: 30px;
    width: 0px; 
    background-color:rgb(26, 221, 0);
    border-radius: 10px; 
    border:none;
    }


</style>

</head>
<body onload="anzeigen()" class="hintergrund">

    <?php require('allgemein/sidemenu.php'); ?>

    <div class="fhead"></div>
    <section class="start">
        <div class="head">
            <p class="überschrift"><b>H<sub>2</sub>O ist lebensnotwendig.<br> Trinke deshalb genug!</b></p>
        </div>
    </section>

    

    <section class="center">
        <div class="wasserFeld">
            <p class="wasserubersicht">Heute hast du <br>schon <b><span id="anzahlGläser"></span> Gläser</b><br> Wasser getrunken.</p>
            <img src="bilder/IconWasser.png" alt="Wasser" class="iconWasser">

            <div id="ladebalken" class="ladebalken">
                <div id="fortschritt" class="fortschritt"></div>
            </div>
        </div>

    </section>
    <section class="center">
        <button class="button" onclick="wasserGetrunken()">Wasser getrunken!</button>
    </section>

    <section class="buffer">
    </section>


    <?php require('allgemein/footer.php'); ?>
</body>
</html>