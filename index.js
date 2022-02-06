if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("sw.js").then(registration => {
        console.log("SW registered");
        console.log(registration);
    }).catch(error => {
        console.log("SW registration failed!");
        console.log(error);
    });
}

Notification.requestPermission(function(status) {
    console.log('Notification permission status:', status);
});

function displayNotification(argument) {
    if (Notification.permission == 'granted') {
      navigator.serviceWorker.getRegistration().then(function(reg) {
        reg.showNotification(argument);
      });
    }
}


function installApp() {
    // Show the prompt
    deferredPrompt.prompt();
    installButton.disabled = true;
  
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then(choiceResult => {
      if (choiceResult.outcome === "accepted") {
        console.log("PWA setup accepted");
        installButton.hidden = true;
      } else {
        console.log("PWA setup rejected");
      }
      installButton.disabled = false;
      deferredPrompt = null;
    });
}


let timerStarted = false;


    function startTimer() {
         if (!timerStarted) {
            let startTime = new Date().getTime();
            let fiveMinutes = 1000 * 60 * 5;
            let endTime = startTime + fiveMinutes;
            let i = 0;


            setInterval(function() {
                let timeLeft = endTime - new Date().getTime();


                if (timeLeft > 0) {
                    let minutes = timeLeft / (1000 * 60);
                    minutes = Math.floor(minutes);
                    let seconds = (timeLeft / 1000) % 60;
                    seconds = Math.round(seconds);
                    seconds = ('0' + seconds).slice(-2);
                    let text = '0'  +  minutes  +  ' : '  +  seconds;
                    let schritt = i++;
                    timer.innerHTML = text;
                    schritteZahl.innerHTML = schritt;
                } else {
                    timer.innerHTML = '00 : 00';
                }
        }, 1000);
        timerStarted = true;
    }
}
