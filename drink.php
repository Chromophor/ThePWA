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
}

function anzeigen(){
    anzahlGläser.innerHTML = Number(localStorage.getItem("Glas"));
}

</script>

</head>
<body onload="anzeigen()">

    <?php require('allgemein/sidemenu.php'); ?>

    <section class="start">
        <p class="title">H<sub>2</sub>O ist lebensnotwendig.<br> Trinke deshalb genug!</p>
    </section>
    <section>
        <p class="wasserubersicht">Heute hast du schon <b><span id="anzahlGläser"></span> Gläser</b> Wasser getrunken.</p>
    </section>
    <section class="center">
        <button class="button" onclick="wasserGetrunken()">Wasser getrunken!</button>
    </section>

    <?php require('allgemein/footer.php'); ?>
</body>
</html>