<!DOCTYPE html>
<html lang="en">

<head>
    
<?php require("allgemein/config.php"); ?>

</head>

<body>

<script>

function ausgabe() {    
        let trwert = document.querySelector("#t-wert").value;
        trwertausgabe.innerHTML = " " + trwert + " Sekunden";
        let pawert = document.querySelector("#p-wert").value;
        pawertausgabe.innerHTML = " " + pawert + " Sekunden";
        }

const jetzt = setInterval(function() {
    ausgabe();
}, 100);
    
</script>

    <?php require('allgemein/sidemenu.php'); ?>

    <section class="start">
        <h1 class="title">Training</h1>
    </section>

    <section class="ubergang1">

        <section class="uberschrift">
            <h1 class="welches">Individuelles Training</h1>
        </section>
        
        <form class="form" action="training.php" method="post">
        <section class="next">
        <section class="together">
            <section class="front">
                <p class="output">Training:</p>
            </section>
            <section class="middle1">
            <div class="output" id="trwertausgabe">45</div>
            </section>
        </section>
        <section class="together">
            <section class="front">
                <p class="output">Pause:</p>
            </section>
            <section class="middle2">
            <div class="output" id="pawertausgabe">45</div>
            </section>
        </section>
        </section>

        <section class="rangenext">
            <input class="outputrange" type="range" max="90" step="5" name="training" id="t-wert">
            <input class="outputrange" type="range" max="90" step="5" name="pause" id="p-wert">
        </section>

        <section class="starternext">
        <input class="starter" type="submit" value="Training starten">
        </section>
        </form>

    </section>


    <section class="ubergang">

        <section class="uberschrift">
            <h1 class="welches">Vorschlag 1</h1>
        </section>

        <form class="form" action="training.php" method="post">
        
        <section class="vorschlag">
            <p class="tvorschlag">Training: 30 Sekunden</p>
            <p class="pvorschlag">Pause: 15 Sekunden</p>
        </section>

            <input class="outputvorschlag" type="hidden" name="training" value="30">
            <input class="outputvorschlag" type="hidden" name="pause" value="15">

        <section class="starternext">
            <input class="starter" type="submit" value="Training starten">
        </section>
        </form>

    </section>


    <section class="ubergang">

        <section class="uberschrift">
            <h1 class="welches">Vorschlag 2</h1>
        </section>

        <form class="form" action="training.php" method="post">
        
        <section class="vorschlag">
            <p class="tvorschlag">Training: 45 Sekunden</p>
            <p class="pvorschlag">Pause: 15 Sekunden</p>
        </section>

            <input class="outputvorschlag" type="hidden" name="training" value="45">
            <input class="outputvorschlag" type="hidden" name="pause" value="15">

        <section class="starternext">
            <input class="starter" type="submit" value="Training starten">
        </section>
        </form>

    </section>


    <section class="buffer">
    </section>

<?php require('allgemein/footer.php'); ?>

</body>

</html>