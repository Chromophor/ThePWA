<?php 
$page = $_SERVER["REQUEST_URI"];
?>


    <nav class="menu">
        <ul>
            <p class="listtitle">ThePWA</p>
            <li class="drop <?php if (($page == "/index.php") or ($page == "/")) {echo "momentan";}?>"><a href="index.php">Startseite</a></li>
            <li class="drop <?php if ($page == "/timer.php") {echo "momentan";}?>"><a href="timer.php">Timer</a></li>
            <li class="drop <?php if ($page == "/all.php") {echo "momentan";}?>"><a href="all.php">All</a></li>
            <li class="drop <?php if ($page == "/platzhalter.php") {echo "momentan";}?>"><a href="#">Platzhalter</a></li>
            <li class="drop <?php if ($page == "/platzhalter.php") {echo "momentan";}?>"><a href="#">Platzhalter</a></li>
        </ul>
    </nav>

    <section class="clap">
        <p class="opener">☰</p>
    </section>

    <script>
        var change = document.querySelector(".opener")
        change.addEventListener("click", function() {
            document.querySelector(".menu").classList.toggle("open");
        })
    </script>