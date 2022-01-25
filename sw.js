self.addEventListener("install", e => {
    e.waitUntil(
         caches.open("static").then(cache =>{
             return cache.addAll([
               "./", 
               "./index.js", 
               "./master.css", 
               "./webmanifest.json",
               "./Bilder/icon57.png",
               "./Bilder/icon60.png",
               "./Bilder/icon120.png",
               "./Bilder/icon192.png",
               "./Bilder/icon512.png",
             ]);
         })
    );
});
 
//NEW!!

self.addEventListener('fetch', e => {
  console.log(`Intercepting fetch request for: ${e.request.url}`);

  e.respondWith(

    caches.match(e.request).then(cachedResponse => cachedResponse || fetch(e.request))
  );
});


//NEW!!
self.addEventListener('push', event => {
  event.waitUntil(
    self.registration.showNotification('Sehen Sie sich Ihre Statistiken an!', {  
      body: 'Sie waren die letzten Tage aktiv, hier sind Ihre Ergebnisse.',  
      icon: '/Bilder/icon120.png',
      tag: 'notification'
    })
  );
});