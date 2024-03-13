const staticDevCoffee = "dev-coffee-site-v1";
const assets = [
  "/",
  "/index.php",
  "/assets/css/bootstrap.min.css",
  "/assets/style.css",
  "/assets/css/responsive.css",
  "/assets/css/custom.css",
  "/assets/js/modernizer.js",
  "/assets/js/all.js",
  "/assets/js/custom.js",
  "/ssets/js/portfolio.js",
  "/assets/js/hoverdir.js",
];

self.addEventListener("install", (installEvent) => {
  installEvent.waitUntil(
    caches.open(staticDevCoffee).then((cache) => {
      cache.addAll(assets);
    })
  );
});
