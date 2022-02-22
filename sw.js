self.addEventListener("install", e => {
    e.waitUntil(
         caches.open("static").then(cache =>{
             return cache.addAll([
               "./", 
               "./index.js", 
               "./style.css",
               "./sensor.js", 
               "./sensor.php",
               "./webmanifest.json",
               "./bilder/icon57.png",
               "./bilder/icon60.png",
               "./bilder/icon120.png",
               "./bilder/icon192.png",
               "./bilder/icon512.png",
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

//Im Moment nur über das Dev-Tool steuerbar
self.addEventListener('push', e => {
  e.waitUntil(
    self.registration.showNotification('Sehen Sie sich Ihre Statistiken an!', {  
      body: 'Sie waren die letzten Tage aktiv, hier sind Ihre Ergebnisse.',  
      icon: '/Bilder/icon120.png',
      tag: 'notification'
    })
  );
});


//New

navigator.serviceWorker.ready.then(registration => {
  if (registration.sync) {
    alert("Funktioniert!");
    
    async function requestBackgroundSync() {
      await self.registration.sync.register('IDSchrittzähler');
    };


  } else {
    alert("Funktioniert nicht!");
  }
});      



self.addEventListener('sync', event => {
  if (event.tag === 'IDSchrittzähler') {
      event.waitUntil(alert("Funktioniert!"));
  }
});