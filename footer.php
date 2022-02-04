<?php  
$page = $_SERVER["REQUEST_URI"];
echo $page;
?>


<footer class="menu-neu">
        <ul class="navi">
            <section class="test2">
                <li class="link <?php if ($page == "/all.php") {echo "momentan";}?>"><a class="ref" href="all.php">All</a></li>
            </section>
            <section class="test2">
                <li class="link <?php if (($page == "/index.php") or ($page == "/")) {echo "momentan";}?>"><a class="ref" href="index.php">Startseite</a></li>
            </section>
            <section class="test2">
                <li class="link <?php if ($page == "/timer.php") {echo "momentan";}?>"><a class="ref" href="timer.php">Timer</a></li>
            </section>
        </ul>
    </footer>