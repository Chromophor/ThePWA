self.addEventListener("install", e => {
    e.waitUntil(
         caches.open("static").then(cache =>{
             return cache.addAll([
               "./", 
               "./index.js",
               "./index.php",
               "./style.css",
               "./sensor.js", 
               "./sensor.php",
               "./drink.php",
               "./settings.php",
               "./timer.php",
               "./training.php",
               "./webmanifest.json",
               "./favicon.ico",

               "./allgemein/config.php",
               "./allgemein/footer.php",
               "./allgemein/sidemenu.php",

               "./bilder/icon57.png",
               "./bilder/icon60.png",
               "./bilder/icon120.png",
               "./bilder/icon192.png",
               "./bilder/icon512.png",
               "./bilder/IconSchritte.png",
               "./bilder/IconHome.png",
               "./bilder/IconTimer.png",
               "./bilder/IconWasser.png",
               "./drop.jpg",
               "./sportback.jpg",
               "./watercolor.jpg"
             ]);
         })
    );
});
 

self.addEventListener('fetch', e => {
  console.log(`Intercepting fetch request for: ${e.request.url}`);

  e.respondWith(

    caches.match(e.request).then(cachedResponse => cachedResponse || fetch(e.request))
  );
});

//Im Moment nur über das Dev-Tool steuerbar!
self.addEventListener('push', e => {
  e.waitUntil(
    self.registration.showNotification('Sehen Sie sich Ihre Statistiken an!', {  
      body: 'Sie waren die letzten Tage aktiv, hier sind Ihre Ergebnisse.',  
      icon: '/Bilder/icon120.png',
      tag: 'notification'
    })
  );
});



if ('serviceWorker' in navigator) {
navigator.serviceWorker.ready.then(registration => {
  if ('BackgroundFetchManager' in window) {
    registration.backgroundFetch.fetch('schritte',
    [''],
    {title: 'Schritte zählen'}
     );
    }
  });
}


navigator.serviceWorker.ready.then(registration => {
  if ('BackgroundFetchManager' in window) {
    registration.backgroundFetch.fetch('offline-songs', [
      'songs/Katy_Perry/Firework.mp3',
      'songs/Hilltop_Hoods/1955.mp3',
      'songs/The_Script/Nothing.mp3'
    ], {
      title: 'Songs für Offlinewiedergabe speichern…'
    });
  }
});




/*  Hintergrund-sync-API

if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('./sw.js');
  navigator.serviceWorker.ready.then(registration => {
    if ('SyncManager' in window) {
      registration.sync.register('IDSchrittzähler');
    }
  });
}


self.addEventListener('sync', event => {
  if (event.tag === 'IDSchrittzähler') {

    console.log("Funktioniert!");

      event.waitUntil();
  }
});
*/