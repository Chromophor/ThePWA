navigator.permissions.query({ name: 'accelerometer' })
.then(result => {
  if (result.state === 'denied') {
    console.log('Permission to use accelerometer sensor is denied.');
    return;
  }
    let acl = new Accelerometer({frequency: 5});
    let aMax = 0;
    let aMin = 0; 
    
    acl.addEventListener('reading', () => {
    console.log("Beschleunigung in X-Achse: " + acl.x);
    console.log("Beschleunigung in Y-Achse: " + acl.y);
    console.log("Beschleunigung in Z-Achse: " + acl.z);
    BeschleunigungX = acl.x;
    //BeschleunigungY.innerHTML = acl.y;
    //BeschleunigungZ.innerHTML = acl.z;
    
    if(acl.x > aMax){
      aMax = acl.x;
      amaxX.innerHTML = "Maximale Beschleunigung: " + aMax;
    }
  
    if(acl.x < aMin){
      aMin = acl.x;
      aminX.innerHTML = "Minimale Beschleunigung: " + aMin;
    }
  
    });

    acl.start();
});



  


function resetA(){
  aMax = 0;
  aMin = 0;
  amaxX.innerHTML = "Maximale Beschleunigung: " + aMax;
  aminX.innerHTML = "Minimale Beschleunigung: " + aMin;
}



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


