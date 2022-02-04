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
        <h1 class="title">Timer</h1>
    </section>

    <section class="timer-box">
        <div class="timer" id="timer">
            05 : 00
        </div>

        <div class="button" onclick="startTimer()">
            Timer starten
        </div>
    </section>


<?php require('allgemein/footer.php'); ?>



</body>

</html>