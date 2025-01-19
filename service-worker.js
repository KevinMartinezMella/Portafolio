const CACHE_NAME = 'km-cache-v1';
const urlsToCache = [
  '/',
  '/index.php',
  '/css/main.css',
  '/css/terminal.css',
  '/js/main.js',
  '/icons/icon-192x192.png',
  '/icons/icon-512x512.png',
  '/CV_Kevin_Martinez.pdf',
  '/img/proyectos/firmante-zoom.png',
  '/img/proyectos/agenda.png',
  '/img/proyectos/copm.png',
  '/img/proyectos/direccion.png',
  '/img/proyectos/expresstaste.png',
  '/img/proyectos/padremariano.png',
  '/img/proyectos/portal.png',
  '/img/tecnologia/css.png',
  '/img/tecnologia/django.png',
  '/img/tecnologia/html.webp',
  '/img/tecnologia/ionic.png',
  '/img/tecnologia/js.png',
  '/img/tecnologia/laravel.png',
  '/img/tecnologia/mysql.png',
  '/img/tecnologia/php.png',
  '/img/tecnologia/python.png',
  '/img/tecnologia/react.png',
  '/img/tecnologia/sqlserver.png',
  '/img/km-logo.png',
  '/img/logo_cumbre.jpg',
  '/img/logo_sycar.jpg',
  '/img/logo-freelance.jpg',
];

// Instalar el Service Worker y cachear recursos
self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      return cache.addAll(urlsToCache);
    })
  );
});

// Activar el Service Worker
self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cache) => {
          if (cache !== CACHE_NAME) {
            return caches.delete(cache);
          }
        })
      );
    })
  );
});

// Interceptar las solicitudes y devolver desde el caché si está disponible
self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      return response || fetch(event.request);
    })
  );
});