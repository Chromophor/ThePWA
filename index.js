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


setInterval( function(){

  var datum  = new Date();
  var month    = datum.getMonth();
  var day      = datum.getDate();
  var hours    = datum.getHours();
  var minut    = datum.getMinutes();
  var second   = datum.getSeconds();

  var Ziel = Number(localStorage.getItem("gewicht")) * 0.04;
  //var Ziel = 80 * 0.04;
  var benötigteGlaser = Math.round(Ziel / 0.2);

  if (Number(localStorage.getItem("Tag")) != day) {
    localStorage.setItem("Schritte", 0);
    localStorage.setItem("Glas", 0);
    localStorage.setItem("rundenheu", 0);
    localStorage.setItem("gesendet", false);
    localStorage.setItem("kalorienheu", 0);
    localStorage.setItem("wasserdifferenz", benötigteGlaser);

    //nun aktuelles Datum lokal speichern
    localStorage.setItem("Tag", day);
    window.location.reload(true);
  }
}, 1000);




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

