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
    <script>
        
    </script>
    <title>ThePWA</title>
</head>

<body class="body">

<?php require('allgemein/sidemenu.php'); ?>

    <section class="start">
        <h1 class="title">Everything</h1>
    </section>

    <section class="werte">
        <div id="amaxX">

            Maximale Beschleunigung: 0

        </div>

        <div id="aminX">

            Minimale Beschleunigung: 0

        </div>

        <div id="Schritte">
            Anzahl der Schritte: 0
        </div>

        <div id="speed">
            Aktuelle Geschwindigkeit: 0 km/h
        </div>

        <section class="button">
            <div onclick="getLocation()">
                Geschwindigkeit anzeigen
            </div>
        </section>

        <section class="button">
            <div onclick="resetA()">
                Beschleunigung zurücksetzen
            </div>
        </section>

    </section>
    
    <?php require('allgemein/footer.php'); ?>

    

</body>

</html>