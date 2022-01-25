navigator.permissions.query({ name: 'accelerometer' })
.then(result => {
  if (result.state === 'denied') {
    console.log('Permission to use accelerometer sensor is denied.');
    return;
  }
    let acl = new Accelerometer({frequency: 60});
    
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

//HTML-Code!!

<div id="BeschleunigungX">
    NAN
</div>

<div id="BeschleunigungY">
    NAN
</div>

<div id="BeschleunigungZ">
    NAN
</div>






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


/*navigator.permissions.query({ name: 'accelerometer' }).then(result => {
  if (result.state === 'denied') {
      console.log('Permission to use accelerometer sensor is denied.');
      return;
  }

  let acl = new Accelerometer({frequency: 30});
  let max_magnitude = 0;
  acl.addEventListener('activate', () => console.log('Ready to measure.'));
  acl.addEventListener('error', error => console.log(`Error: ${error.name}`));
  acl.addEventListener('reading', () => {
      let magnitude = Math.hypot(acl.x, acl.y, acl.z);
      if (magnitude > max_magnitude) {
          max_magnitude = magnitude;
          console.log(`Max magnitude: ${max_magnitude} m/s2`);
      }
  });
  acl.start();
});*/



/*let accelerometer = null;
try {
  accelerometer = new Accelerometer({ frequency: 10 });
  accelerometer.onerror = (event) => {
    // Handle runtime errors.
    if (event.error.name === 'NotAllowedError') {
      console.log('Permission to access sensor was denied.');
    } else if (event.error.name === 'NotReadableError') {
      console.log('Cannot connect to the sensor.');
    }
  };
  accelerometer.onreading = (e) => {
    console.log(e);

  };
  accelerometer.start();
} catch (error) {
  // Handle construction errors.
  if (error.name === 'SecurityError') {
    console.log('Sensor construction was blocked by the Permissions Policy.');
  } else if (error.name === 'ReferenceError') {
    console.log('Sensor is not supported by the User Agent.');
  } else {
    throw error;
  }
}*/

//HTML-code