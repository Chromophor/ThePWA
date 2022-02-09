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


<body>

<script>
    let training = <?php echo json_encode($_POST["training"]); ?>;
    document.write(training);
    let pause = <?php echo json_encode($_POST["pause"]); ?>;
    document.write(pause);
</script>

<script>

    let timerhenrikStarted = false;
    let trainingover = false;

    function starthenrikTimer() {
        if (!timerhenrikStarted) {
            let startTime = new Date().getTime();
            let trainingszeit = 1000 * training;
            let pausezeit = 1000 * pause;
            let endtraining = startTime + trainingszeit;
            let endpause = startTime + pausezeit + trainingszeit;


            setInterval(function() {
                let timelefttraining = endtraining - new Date().getTime();


                if (timelefttraining > 0) {
                    let trainingseconds = (timelefttraining / 1000) % 60;
                    trainingseconds = Math.round(trainingseconds);
                    timerhenrik.innerHTML = trainingseconds;
                } 
                else {
                    let trainingover = true;
                    

                }

                if (trainingover === true) {
                    let timeleftpause = endpause - new Date().getTime();


                    if (timeleftpause > 0) {
                        let pauseseconds = (timeleftpause / 1000) % 60;
                        pauseseconds = Math.round(pauseseconds);
                        timerhenrik.innerHTML = pauseseconds;
                    } 
                    else {
                        timerhenrik.innerHTML = 'finished';
                        
                    }
                }
                
            }, 1000);


            
            timerhenrikStarted = true;
            
        }
    }

</script>

<section class="timer-box">
        <div class="timer" id="timerhenrik">
            <?php echo $_POST["training"] ?> Sekunden
        </div>

        <div class="button" onclick="starthenrikTimer()">
            Training starten
        </div>
    </section>

</body>

</html>