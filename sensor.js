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
    var aGesamt = Math.sqrt(Math.pow(acl.x, 2) + Math.pow(acl.y, 2) + Math.pow((acl.z - 9.5), 2) );
    
    
   // ((acl.x + acl.y + acl.z) - 9.5)
    

    amaxX.innerHTML = "Gesamtbeschleunigung = " + aGesamt;

    /*if(aGesamt > aMax){
      aMax = aGesamt;
      amaxX.innerHTML = "Maximale Beschleunigung: " + aMax;
    }*/
  
    if(aGesamt < aMin){
      aMin = aGesamt;
      aminX.innerHTML = "Minimale Beschleunigung: " + aMin;
    }

    if(aGesamt > 1 && aGesamt < 2){
      anzahlSchritte = anzahlSchritte + 1;
      Schritte.innerHTML = "Anzahl der Schritte: " + anzahlSchritte;
    }

    function resetA(){
      aMax = 0;
      aMin = 0;
      aGesamt = 0;
      anzahlSchritte = 0;
      amaxX.innerHTML = "Maximale Beschleunigung: " + aMax;
      aminX.innerHTML = "Minimale Beschleunigung: " + aMin;
      Schritte.innerHTML = "Anzahl der Schritte: " + anzahlSchritte;
    }
  
    });

    acl.start();
});



//new
if('geolocation' in navigator) {

console.log("Geolokation verfügbar!");
navigator.geolocation.getCurrentPosition(function(position) {
  const gesch = position.coords.speed;
  console.log(gesch);
  speed.innerHTML = "Aktuelle Geschwindigkeit: " + gesch;
  });
}





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


