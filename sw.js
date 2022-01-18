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
              "./Bilder/icon512.png"
            ]);
        })
   );
});

self.addEventListener('fetch', event => {
  event.respondWith(
      caches.match(event.request).then(response => {
          return response || fetch(event.request);
      })
  );

  if (response) {
    return response;
  } else {
    return fetch(event.request);
  }

});

self.addEventListener("fetch", e => {
    console.log(`Intercepting fetch request for: ${e.request.url}`);
});

