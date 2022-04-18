<?php 
$page = $_SERVER["REQUEST_URI"];
?>


    <nav class="menu">
        <ul>
            <p class="listtitle">ThePWA</p>
            <li class="drop <?php if (($page == "/index.php") or ($page == "/")) {echo "jetzt";}?>"><a href="index.php">Startseite</a></li>
            <li class="drop <?php if ($page == "/timer.php") {echo "jetzt";}?>"><a href="timer.php">Training</a></li>
            <li class="drop <?php if ($page == "/sensor.php") {echo "jetzt";}?>"><a href="sensor.php">Schrittzähler</a></li>
            <li class="drop <?php if ($page == "/drink.php") {echo "jetzt";}?>"><a href="drink.php">Trinkziel</a></li>
            <li class="drop <?php if ($page == "/settings.php") {echo "jetzt";}?>"><a href="settings.php">Einstellungen</a></li>
        </ul>
    </nav>

    <section class="klappen">
        <p class="opener">☰</p>
    </section>

    <script>
        var change = document.querySelector(".opener")
        change.addEventListener("click", function() {
            document.querySelector(".menu").classList.toggle("open");
        })
    </script>