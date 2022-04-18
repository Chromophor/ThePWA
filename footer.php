<?php  
$page = $_SERVER["REQUEST_URI"];
?>


<footer class="menu-neu">
        <ul class="navi">
            <section class="footerplace <?php if ($page == "/sensor.php") {echo "i11";}?>">
                <li class="link <?php if ($page == "/sensor.php") {echo "momentan";}?>"><a class="ref" href="sensor.php"><img class="iconfooter" src="bilder/IconSchritte.png"></a></li>
            </section>
            <section class="footerplace <?php if (($page == "/index.php") or ($page == "/")) {echo "i11";}?>">
                <li class="link <?php if (($page == "/index.php") or ($page == "/")) {echo "momentan";}?>"><a class="ref" href="index.php"><img class="iconfooter" src="bilder/IconHome.png"></a></li>
            </section>
            <section class="footerplace <?php if ($page == "/timer.php") {echo "i11";}?>">
                <li class="link <?php if ($page == "/timer.php") {echo "momentan";}?>"><a class="ref" href="timer.php"><img class="iconfooter" src="bilder/IconTimer.png"></a></li>
            </section>
        </ul>
    </footer>