var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/offline',
    '/css/app.css',
    '/js/app.js',
    '/images/icons/favicon.ico',
    '/images/icons/icon-96x96.png',
    // '/images/icons/icon-128x128.png',
    // '/images/icons/icon-144x144.png',
    // '/images/icons/icon-152x152.png',
    '/images/icons/icon-192x192.png',
    // '/images/icons/icon-384x384.png',
    '/images/icons/icon-512x512.png',
];

self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

filesToCache.forEach(async (file) => {
    try {
        const response = await fetch(file);
        if (!response.ok) {
            console.warn(`No se pudo cachear: ${file} - Estado: ${response.status}`);
        }
    } catch (error) {
        console.warn(`Error al intentar cachear: ${file}`, error);
    }
});


// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});



self.addEventListener('fetch', (event) => {
    if (!navigator.onLine) {
        event.respondWith(
            caches.match(event.request).then((response) => {
                return response || fetch(event.request).catch(() => caches.match('/offline'));
            })
        );
    }
});










// self.addEventListener("install", event => {
//     this.skipWaiting(caches.open('offline-cache').then((cache) => {
//         return cache.addAll([
//             '/offline', // Página offline
//             '/css/styles.css', // Estilos
//             '/js/app.js', // JS principal
//         ]);
//     }));
//     event.waitUntil(
//         caches.open(staticCacheName)
//             .then(cache => {
//                 return cache.addAll(filesToCache).catch(error => {
//                     console.error("Fallo al cachear recursos:", error);
//                 });
//             })
//     );
// });

// self.addEventListener('install', (event) => {
//     event.waitUntil(
//         caches.open('offline-cache').then((cache) => {
//             return cache.addAll([
//                 '/offline', // Página offline
//                 '/css/styles.css', // Estilos
//                 '/js/app.js', // JS principal
//             ]);
//         })
//     );
// });





// Serve from Cache
// self.addEventListener("fetch", event => {
//     event.respondWith(
//         caches.match(event.request)
//             .then(response => {
//                 return response || fetch(event.request);
//             })
//             .catch(() => {
//                 return caches.match('/offline');
//             })
//     )
// });