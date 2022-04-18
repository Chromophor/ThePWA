<!DOCTYPE html>
<html lang="en">

<head>
    
<?php require("allgemein/config.php"); ?>

</head>


<body>

<?php require("allgemein/sidemenu.php"); ?>

<script>
    let training = Number(<?php echo json_encode($_POST["training"]); ?>);
    let pause = Number(<?php echo json_encode($_POST["pause"]); ?>);
</script>

<script>

    /*function starthenrikTimerx() {
        let x = 1;
	const timer = setInterval(function() {
		console.log(x);
		timerhenrik.innerHTML = x + ' seconds';
	   x++;
	   if(x > 10) {
               clearInterval(timer);
	   }
	}, 1000)
	console.log("end timer");
    }*/

    let anhalten = false;
    let zuruck = false;
    let back = false;
    let weiter = false;
    let timerhenrikStarted = false;
    let runden = 0;

    function laufen() {

        starthenrikTimer();

        const warten = setInterval(function() {
            if (weiter === true) {
            starthenrikTimer();
            weiter = false;
        }
        }, 100);
    
        const stop = setInterval(function() {
            if (anhalten === true && zuruck === false) {
                clearInterval(warten);
                clearInterval(stop);
            }
            if (anhalten === true && zuruck === true) {
                zuruck = false;
                clearInterval(warten);
                clearInterval(stop);
                window.location = "/index.php"
            }
        }, 100);
    }

    const directback = setInterval(function() {
        if (back === true) {
            clearInterval(directback);
            window.location = "/index.php"
        }
    }, 100);

    function starthenrikTimer() {
        if (!timerhenrikStarted) {
            let startTime = new Date().getTime();
            let trainingszeit = (1000 * training) + 1000;
            let pausezeit = (1000 * pause) + 1000;
            let endtraining = startTime + trainingszeit;
            let endpause = startTime + pausezeit + trainingszeit;
            timerhenrik.innerHTML = 'Training: ' + training;

            const timertraining = setInterval(function() {

                let timelefttraining = endtraining - new Date().getTime();


                if (timelefttraining >= 0 && anhalten === false) {
                    let trainingseconds = (timelefttraining / 1000);
                    trainingseconds = (Math.round(trainingseconds)) - 1;
                    timerhenrik.innerHTML ='Training: ' + trainingseconds;
                }
                else if (anhalten === true) {
                    timerhenrik.innerHTML = 'Training';
                    clearInterval(timertraining);
                    clearInterval(timerpause);
                    anhalten = false;
                }
                else {
                    runden++;
                    runde.innerHTML = 'Runden: ' + runden;
                    rundenspeicherges = Number(localStorage.getItem("rundenges"));
                    rundenspeicherges = rundenspeicherges + 1;
                    localStorage.setItem("rundenges", rundenspeicherges);
                    rundenspeicherheu = Number(localStorage.getItem("rundenheu"));
                    rundenspeicherheu = rundenspeicherheu + 1;
                    localStorage.setItem("rundenheu", rundenspeicherheu);
                    clearInterval(timertraining);
                }
            }, 1000); 
                

            const timerpause = setInterval(function() {
                        

                let timeleftpause = endpause - new Date().getTime();


                if (timeleftpause > 0 && timeleftpause < endpause - endtraining && anhalten === false) {
                    let pauseseconds = (timeleftpause / 1000);
                    pauseseconds = (Math.round(pauseseconds)) - 1;
                    timerhenrik.innerHTML = 'Pause: ' + pauseseconds;
                } 
                else if (timeleftpause >= endpause - endtraining && anhalten === false) {
                }
                else if (anhalten === true) {
                    timerhenrik.innerHTML = 'Training';
                    clearInterval(timerpause);
                    anhalten = false;
                }
                else {
                    clearInterval(timerpause);
                    weiter = true;
                }
            }, 1000);
        }
    }

</script>
    <section class="intervall">
        <div class="timerinterval-box">
            <p class="timerinterval" id="timerhenrik">Training</p>
        </div>

        <div class="runden-box">
            <p class="runden" id="runde">Runden: 0</p>
        </div>

        <div class="trainingstart-box">
            <p class="trainingstart" onclick="laufen()">Starten</p>
            <p class="trainingende" onclick="back = true">Übersicht</p>
        </div>

        <div class="trainingende-box">
            <p class="trainingpause" onclick="anhalten = true">Anhalten</p>
            <p class="trainingende" onclick="anhalten = true, zuruck = true">Übersicht</p>
        </div>
    </section>

<script>
    var change = document.querySelector(".trainingstart")
    change.addEventListener("click", function() {
        document.querySelector(".trainingstart-box").classList.toggle("startweg");
        document.querySelector(".trainingende-box").classList.toggle("endeda");
    })

    var change = document.querySelector(".trainingpause")
    change.addEventListener("click", function() {
        document.querySelector(".trainingstart-box.startweg").classList.toggle("startweg");
        document.querySelector(".trainingende-box.endeda").classList.toggle("endeda");
    })
</script>

<?php require("allgemein/footer.php"); ?>

</body>

</html>