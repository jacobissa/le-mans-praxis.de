const cacheName = "le-mans-praxis-v5.0.22";
const contentToCache = ["./"];

self.addEventListener("activate", (e) => {
  e.waitUntil(
    (async () => {
      const cacheNames = await caches.keys();
      await Promise.all(
        cacheNames
          .filter((name) => name !== cacheName)
          .map((name) => caches.delete(name))
      );
    })()
  );
});

self.addEventListener("install", (e) => {
  self.skipWaiting();
  e.waitUntil(
    (async () => {
      const cache = await caches.open(cacheName);
      await cache.addAll(contentToCache);
    })()
  );
});

self.addEventListener("fetch", (e) => {
  e.respondWith(
    (async () => {
      const r = await caches.match(e.request);
      if (r) return r;
      const response = await fetch(e.request);
      const cache = await caches.open(cacheName);
      cache.put(e.request, response.clone());
      return response;
    })()
  );
});
