<!DOCTYPE html>
<html lang="en">

<head>
    
<?php require("allgemein/config.php"); ?>

    <body style="background-image:url(bilder/sportback.jpg)" class="hintergrund">

    <script>

        const checkFirstUse = setInterval(function () {
            if (!namE) {
                modal.style.display = "block";
            } else {
                modal.style.display = "none";
                clearInterval(checkFirstUse);
            }

        }, 100);


        function speichern() {
            //Daten aus Input-Feld auslesen
            name = document.querySelector("#name").value;
            gewicht = document.querySelector("#Eingabegewicht").value;
            ziel = document.querySelector("#EingabeschrittZiel").value;
            schrittLange = document.querySelector("#EingabeschrittLange").value;

            //jetzt Daten lokal speichern

            localStorage.setItem("name", name);
            localStorage.setItem("gewicht", gewicht)
            localStorage.setItem("schrittZiel", ziel);
            localStorage.setItem("schrittLange", schrittLange)


            setTimeout(function() {
                window.location.reload(true);
            }, 400);

        }

        function werteZeigen() {
            //Name zeigen
            namE = localStorage.getItem("name");
            if (String(localStorage.getItem("name")) != "null"){
            begrueßung.innerHTML = ", " + namE;
            }
            //Wasser Gläser anzeigen
            wasserzw = Number(localStorage.getItem("Glas"));
            wassergl.innerHTML = wasserzw;
            //Wasserziel anzeigen
            wasserzielzw = Number(localStorage.getItem("wasserziel"));
            wasserzielan.innerHTML = wasserzielzw;
            //Wasserdifferenz anzeigen
            wasserdifferenzzw = Number(localStorage.getItem("wasserdifferenz"));
            wasserdifferenzan.innerHTML = wasserdifferenzzw;
            //Schritte anzeigen
            schrittezw = Number(localStorage.getItem("Schritte"));
            schrittean.innerHTML = schrittezw;
            //Schrittziel anzeigen
            schrittzielzw = Number(localStorage.getItem("schrittZiel"));
            schrittzielan.innerHTML = schrittzielzw;
            //Kalorien heute anzeigen
            kalorienheuzw = Number(localStorage.getItem("kalorienheu"));
            kalorienheuan.innerHTML = kalorienheuzw;
            //Runden heute anzeigen
            rundenheuzw = Number(localStorage.getItem("rundenheu"));
            rundenheuan.innerHTML = rundenheuzw;
            //Runden gesamt anzeigen
            rundengeszw = Number(localStorage.getItem("rundenges"));
            rundengesan.innerHTML = rundengeszw;
            //Kalorien gesamt anzeigen
            kaloriengeszw = Number(localStorage.getItem("kalorienges"));
            kaloriengesan.innerHTML = kaloriengeszw;
            //Strecke gesamt anzeigen
            streckegeszw = Number(localStorage.getItem("streckeges"));
            streckegesan.innerHTML = streckegeszw;
        }

        function ausgabe() {    
        let zielAusgabe = document.querySelector("#EingabeschrittZiel").value;
        let gewichtAusgabe = document.querySelector("#Eingabegewicht").value;
        let schrittlangeAusgabe = document.querySelector("#EingabeschrittLange").value;

        Zielausgabe.innerHTML = zielAusgabe;
        Gewichtausgabe.innerHTML = gewichtAusgabe;
        Schrittlangeausgabe.innerHTML = schrittlangeAusgabe;
        }

        const jetzt = setInterval(function() {
        ausgabe();
        }, 100);

    </script>

</head>

<body onload="werteZeigen()">

<?php require('allgemein/sidemenu.php'); ?>

    <!-- Popup -->
    <div id="popup" class="modal">

        <!-- Inhalt -->
        <div class="modalcontent" id="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2><span>&#128075;</span> Du bist neu hier!<br>
                Gib uns ein paar Daten, damit diese App funktioniert.</h2>
            </div>
            <div class="modal-body">

                <p>Dein Name:              <input type="text" name="name" id="name" placeholder="Dein Name..." class="input"></p>
                <p>Dein Gewicht:           <input type="range" name="Eingabegewicht" max="200" step="5" id="Eingabegewicht" class="input"> <span id="Gewichtausgabe"> 0 </span> kg</p>
                <p>Schrittlänge:           <input type="range" name="EingabeschrittLange" max="100" step="5" id="EingabeschrittLange" class="input"> <span id="Schrittlangeausgabe"> 0 </span> cm</p>
                <p>Tägliches Schrittziel:  <input type="range" name="EingabeschrittZiel" max="10000" step="10" id="EingabeschrittZiel" class="input"> <span id="Zielausgabe"> 0 </span> Schritte</p>
                

                <button class="button" onclick="speichern()">Speichern</button>

            </div>
            <div class="modal-footer">
                <h3>Wir möchten Dich auf unsere <a href="https://policies.google.com/technologies/cookies?utm_source=ucbs&hl=de">Cookies</a> hinweisen. Bitte lies unsere <a href="https://policies.google.com/terms?hl=de&fg=1&utm_source=ucbs">AGB</a> und die
                    Datenschutzbestimmungen.
                </h3>
            </div>
        </div>

    </div>


    <!-- Popup-js -->
    <script>
        // get Popup
        var modal = document.getElementById("popup");

        // Get the button that opens the Popup
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the Popup
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the Popup
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the Popup, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <script>
        var change = document.querySelector(".button")
        change.addEventListener("click", function() {
            document.querySelector(".modalcontent").classList.toggle("fadeaway");
        })
    </script>


    <section class="start">
        <h1 class="title">Moin<span id="begrueßung"></span><br>Deine Übersicht</h1>
    </section>


    <section class="ubersicht">
        <section class="schritte">
        <p class="u-title">Schritte</p>
        <p class="u-text"><span id="schrittean"></span>/<span id="schrittzielan"></span></p>
        <p class="u-text">Kalorien heute: <span id="kalorienheuan"></span></p>
        </section>

        <section class="wasser">
        <p class="u-title">Wasser</p>
        <section class="glas">
        <p class="u-textwa"><span id="wassergl"></span>/<span id="wasserzielan"></span></p>
        <img class="glassbild" src="bilder/IconWasser.png">
        </section>
        <p class="u-text">Heute noch<br><span id="wasserdifferenzan"></span> Gläser!</p>
        </section>

        <section class="trainingrunden">
        <p class="u-title">Training</p>
        <p class="u-text">Runden heute: <span id="rundenheuan"></span></p>
        <p class="u-text">Runden gesamt: <span id="rundengesan"></span></p>
        </section>

        <section class="stats">
        <p class="u-title">Stats</p>
        <p class="u-text">Kalorien gesamt: <span id="kaloriengesan"></span></p>
        <p class="u-text">Strecke gesamt: <span id="streckegesan"></span></p>
        </section>
    </section>

    <section class="buffer">
    </section>


<?php require('allgemein/footer.php'); ?>

</body>

</html>