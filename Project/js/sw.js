var cacheName = 'final-project';
var filesToCache= [
  '/',
  '/index.html',
  '/women.html',
  '/men.html',
  '/sale.html',
  '/kids.html',
  '/css/style.css',
  '/images',
  '/js/app.js'

];

self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.addAll(filesToCache);
    })
  );
  self.skipWaiting();
});

self.addEventListener('fetch', function(e) {
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});
