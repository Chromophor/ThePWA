navigator.permissions.query({ name: 'accelerometer' })
.then(result => {
  if (result.state === 'denied') {
    console.log('Permission to use accelerometer sensor is denied.');
    return;
  }
    let acl = new Accelerometer({frequency: 5});
    
    acl.addEventListener('reading', () => {
    console.log("Beschleunigung in X-Achse: " + acl.x);
    console.log("Beschleunigung in Y-Achse: " + acl.y);
    console.log("Beschleunigung in Z-Achse: " + acl.z);
    BeschleunigungX.innerHTML = acl.x;
    BeschleunigungY.innerHTML = acl.y;
    BeschleunigungZ.innerHTML = acl.z;
    
    });

    acl.start();
});


let aMax = 0;
let aMin = 0;
let acl = new Accelerometer({frequency: 5});


function checkX(){
  if(acl.x > aMax){
    aMax = acl.x;
    amaxX.innerHTML = "Maximale Beschleunigung: " + aMax;
  }

  if(acl.x < aMin){
    aMin = acl.x;
    aminX.innerHTML = "Minimale Beschleunigung: " + aMin;
  }
}



function resetA(){
  aMax = 0;
  aMin = 0;
  amaxX.innerHTML = "Maximale Beschleunigung: " + aMax;
  aminX.innerHTML = "Minimale Beschleunigung: " + aMin;
}