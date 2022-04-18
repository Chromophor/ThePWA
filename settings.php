<!DOCTYPE html>
<html lang="en">

<head>
    
<?php require("allgemein/config.php"); ?>

<script>

    function speichernname() {
        let nameneu = document.querySelector("#name").value;
        if (nameneu != "") {
            localStorage.setItem("name", nameneu);
            window.location.reload(true);
        }
    }

    function speicherngewicht() {
        let gewichtneu = document.querySelector("#Eingabegewicht").value;
        localStorage.setItem("gewicht", gewichtneu);
        window.location.reload(true);
    }

    function speichernschrittlange() {
        let schrittlangeneu = document.querySelector("#EingabeschrittLange").value;
        localStorage.setItem("schrittLange", schrittlangeneu);
        window.location.reload(true);
    }

    function speichernschrittziel() {
        let schrittzielneu = document.querySelector("#EingabeschrittZiel").value;
        localStorage.setItem("schrittZiel", schrittzielneu);
        window.location.reload(true);
    }

    function ausgabe() {    
        let gewichtan = document.querySelector("#Eingabegewicht").value;
        Gewichtausgabe.innerHTML = gewichtan;

        let schrittlangean = document.querySelector("#EingabeschrittLange").value;
        Schrittlangeausgabe.innerHTML = schrittlangean;

        let schrittzielan = document.querySelector("#EingabeschrittZiel").value;
        Zielausgabe.innerHTML = schrittzielan;
        }

    const jetzt = setInterval(function() {
        ausgabe();
    }, 100);


    function werteZeigen() {
        //Name zeigen
        namezw = localStorage.getItem("name");
        namean.innerHTML = namezw;
        //Gewicht zeigen
        gewichtzw = Number(localStorage.getItem("gewicht"));
        gewichtan.innerHTML = gewichtzw;
        //Schrittlänge zeigen
        schrittlangezw = Number(localStorage.getItem("schrittLange"));
        schrittlangean.innerHTML = schrittlangezw;
        //Schrittziel zeigen
        schrittzielzw = Number(localStorage.getItem("schrittZiel"));
        schrittzielan.innerHTML = schrittzielzw;
    }

</script>

</head>

<body onload="werteZeigen()">

<?php require("allgemein/sidemenu.php"); ?>

    <section class="start">
        <h1 class="title">Einstellungen</h1>
    </section>

    <section class="settings">
        
        <section class="change">
            <section class="divider">
                <p>Dein Name: <br><input type="text" name="name" id="name" placeholder="Dein Name..." class="input"></p>
            </section>
            <section class="divider">
                <p>Momentaner Name:<br><span id="namean"></span></p>
            </section>
        </section>
            <section class="save">
                <button class="speichern" onclick="speichernname()">Speichern</button>
            </section>

    </section>


    <section class="settings">

        <section class="change">
            <section class="divider">
            <p>Dein Gewicht: <br><input type="range" name="Eingabegewicht" max="200" step="5" id="Eingabegewicht" class="input"> <span id="Gewichtausgabe"> 0 </span> kg</p>
            </section>
            <section class="divider">
                <p>Momentaner Wert:<br><span id="gewichtan"></span> kg</p>
            </section>
        </section>
            <section class="save">
                <button class="speichern" onclick="speicherngewicht()">Speichern</button>
            </section>

    </section>


    <section class="settings">

        <section class="change">
            <section class="divider">
            <p>Schrittlänge: <br><input type="range" name="EingabeschrittLange" max="100" step="5" id="EingabeschrittLange" class="input"> <span id="Schrittlangeausgabe"> 0 </span> cm</p>
            </section>
            <section class="divider">
                <p>Momentaner Wert:<br><span id="schrittlangean"></span> cm</p>
            </section>
        </section>
            <section class="save">
                <button class="speichern" onclick="speichernschrittlange()">Speichern</button>
            </section>

    </section>


    <section class="settings">

        <section class="change">
            <section class="divider">
            <p>Tägliches Schrittziel: <br><input type="range" name="EingabeschrittZiel" max="10000" step="10" id="EingabeschrittZiel" class="input"> <span id="Zielausgabe"> 0 </span> Schritte</p>
            </section>
            <section class="divider">
                <p>Momentaner Wert:<br><span id="schrittzielan"></span> Schritte</p>
            </section>
        </section>
            <section class="save">
                <button class="speichern" onclick="speichernschrittziel()">Speichern</button>
            </section>
               

    </section>

<?php require("allgemein/footer.php"); ?>

</body>

</html>