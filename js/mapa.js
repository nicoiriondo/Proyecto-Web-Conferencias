(function() {
    "use strict";

    document.addEventListener('DOMContentLoaded', function() {
        var map = L.map('mapa').setView([-34.919332, -54.917908], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-34.919332, -54.917908]).addTo(map)
            .bindPopup('Centro de Convenciones de Punta del Este.').openPopup();
    });
})();