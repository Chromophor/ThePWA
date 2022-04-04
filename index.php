<!DOCTYPE html>
<html lang="en">

<head>
    
<?php require("allgemein/config.php"); ?>

    <body style="background-image:url(bilder/sportback.jpg)" class="hintergrund">

    <script>

        function checkFirstUse() {
            if (!namE) {
                modal.style.display = "block";
            } else {
                modal.style.display = "none";
            }

        }


        function speichern() {
            //Namen aus Input-Feld auslesen
            name = document.querySelector("#name").value;

            //jetzt Namen lokal speichern

            localStorage.setItem("name", name);

            localStorage.setItem("firstUse", "1");

            setTimeout(function() {
                window.location.reload(true);
            }, 400);
        }

        function werteZeigen() {
            //Name zeigen
            namE = localStorage.getItem("name");
            begrueßung.innerHTML = namE;
            //Wasser zeigen
            wasserzw = Number(localStorage.getItem("Glas"));
            wassergl.innerHTML = wasserzw;
            //Schritte zeigen
            schrittezw = Number(localStorage.getItem("Schritte"));
            schrittean.innerHTML = schrittezw;
            //Schrittziel zeigen
            schrittzielzw = Number(localStorage.getItem("schrittZiel"));
            schrittzielan.innerHTML = schrittzielzw;
            schrittzielan1.innerHTML = schrittzielzw;
            //Runden ges anzeigen
            rundengeszw = Number(localStorage.getItem("rundenges"));
            rundengesan.innerHTML = rundengeszw;
        }

    </script>

</head>

<body onload="werteZeigen(), checkFirstUse()">

<?php require('allgemein/sidemenu.php'); ?>

    <!-- Popup -->
    <div id="popup" class="modal">

        <!-- Inhalt -->
        <div class="modalcontent" id="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Du bist neu hier, wie heißt du?</h2>
            </div>
            <div class="modal-body">

                <p>Dein Name: <input type="text" name="name" id="name" placeholder="Dein Name..." class="input"></p>

                <button class="button" onclick="speichern()">Speichern</button>

            </div>
            <div class="modal-footer">
                <h3>Wir möchten Dich auf unsere <a href="https://policies.google.com/technologies/cookies?utm_source=ucbs&hl=de">Cookies</a> hinweisen. Bitte lies unsere <a href="https://policies.google.com/terms?hl=de&fg=1&utm_source=ucbs">AGB</a> und die
                    Datenschutzbestimmungen
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
        <h1 class="title">Moin, <span id="begrueßung"></span><br>Deine Übersicht</h1>
    </section>


    <section class="ubersicht">
        <section class="schritte">
        <p class="u-title">Schritte</p>
        <p><span id="schrittean"></span>/<span id="schrittzielan"></span></p>
        <p><span id="schrittzielan1"></span></p>
        </section>

        <section class="wasser">
        <p class="u-title">Wasser</p>
        <section class="glas">
        <p class="glas-text"><span id="wassergl"></span>/9</p>
        <img class="glassbild" src="bilder/glasicon.png">
        </section>
        </section>

        <section class="trainingrunden">
        <p class="u-title">Training</p>
        <section class="t-heute">
            <p class="theute">Runden heute:</p>
            <p class="thzahl">3</p>
        </section>
        <section class="t-gesamt">
            <p class="tgesamt">Runden gesamt:</p>
            <p class="tgzahl"><span id="rundengesan"></span></p>
        </section>
        </section>

        <section class="empty">
        <p class="u-title">Empty</p>
        <p>Empty</p>
        <p>Empty</p>
        </section>
    </section>


<?php require('allgemein/footer.php'); ?>

</body>

</html>