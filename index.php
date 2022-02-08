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
        navigator.serviceWorker.register("sw.js");
    </script>
    <title>ThePWA</title>
</head>

<body class="body">

<?php require('allgemein/sidemenu.php'); ?>

    <section class="start">
        <h1 class="title">Willkommen bei ThePWA<br>Fitnessapp</h1>
    </section>

    <p>https://www.w3schools.com/js/js_api_web_storage.asp</p>

<?php require('allgemein/footer.php'); ?>

</body>

</html>