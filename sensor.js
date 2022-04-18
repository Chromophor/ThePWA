navigator.permissions.query({ name: 'accelerometer' })
.then(result => {
  
  if (result.state === 'denied') {
    console.log('Permission to use accelerometer sensor is denied.');
    return;
  }
    let acl = new Accelerometer({frequency: 5});
    let aMax = 0;
    let aMin = 0;
    let aGesamt = 0;
    let anzahlSchritte = 0; 
    
    acl.addEventListener('reading', () => {
    console.log("Beschleunigung in X-Achse: " + acl.x);
    console.log("Beschleunigung in Y-Achse: " + acl.y);
    console.log("Beschleunigung in Z-Achse: " + acl.z);
    const BeschleunigungX = acl.x;
    const BeschleunigungY = acl.y;
    const BeschleunigungZ = acl.z;
    var aGesamt = Math.sqrt(Math.pow(  Math.sqrt(Math.pow(acl.x, 2) + Math.pow(acl.y, 2) + Math.pow(acl.z, 2)) - 9.5 , 2));
    

    if(aGesamt > 1 && aGesamt < 2){
      anzahlSchritte = anzahlSchritte + 1;
      localStorage.setItem("Schritte", anzahlSchritte);
      ladeBalken();
      stats();
      anzeigen();
    }
  });

  acl.start();
});





if (navigator.geolocation) {
  var options = {
    enableHighAccuracy: true
  }
  navigator.geolocation.watchPosition(showPosition, showError, options);
} else {
  alert('Ihr Browser unterstützt die Geolocation API nicht.');
}


function showPosition(position) {  
  Geschwindigkeit.innerHTML = position.coords.speed * 3.6;
};

function showError(error) {
  switch(error.code) {
      case error.PERMISSION_DENIED:
          console.log('Sie haben die Abfrage ihrer Position untersagt.');
          break;
      case error.POSITION_UNAVAILABLE:
          console.log('Es sind keine Positionsdaten verfügbar.');
          break;
      case error.TIMEOUT:
          console.log('Das Timeout für die Ortsanfrage wurde überschritten.');
          break;
      default:
          console.log('Es ist ein unbekannter Fehler aufgetreten (#' + error.code + ': ' + error.message + ')');
          break;
  }
};



/*
function getLocation() {
  let speed = geolocationCoordinatesInstance.speed
  if (navigator.geolocation) {
    
  var operator = true;
  speed.innerHTML = "Aktuelle Geschwindigkeit: " + speed + "km/h";
  } else {
    speed.innerHTML = "Geolocation is not supported by this browser.";
  }
}
while(operator = true) {
  getLocation();
}
function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
}
*/

/*navigator.permissions.query({ name: 'gyroscope' })
.then(result => {
  if (result.state === 'denied') {
    console.log('Permission to use gyroscope sensor is denied.');
    return;
  }
    let gyroscope = new Gyroscope({frequency: 60});
    gyroscope.addEventListener('reading', e => {
    console.log("Lage in X-Achse: " + gyroscope.x);
    console.log("Lage in Y-Achse: " + gyroscope.y);
    console.log("Lage in Z-Achse: " + gyroscope.z);
    });
    gyroscope.start();
});*/