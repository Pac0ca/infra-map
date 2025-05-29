<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Mapa de Infraestrutura</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
    <style>
        #map {
            height: 600px;
            width: 100%;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Informe onde está faltando infraestrutura:</h1>
    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        // Pega o token CSRF para enviar junto na requisição
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const map = L.map('map').setView([-2.9083, -41.7754], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);

        map.on('click', function(e) {
            const lat = e.latlng.lat;
            const lng = e.latlng.lng;

            L.marker([lat, lng]).addTo(map)
                .bindPopup(`Local marcado: ${lat.toFixed(5)}, ${lng.toFixed(5)}`).openPopup();

            // Envia via fetch os dados para o backend Laravel
            fetch("{{ route('infraestruturas.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken
                },
                body: JSON.stringify({
                    latitude: lat,
                    longitude: lng
                })
            })
            .then(response => response.json())
            .then(data => {
                alert('Local salvo com sucesso!');
                window.location.href = '/reclamacoes/criar';
            });

            })
            .catch(error => {
                alert('Erro ao salvar o local.');
                console.error(error);
            });

        
    </script>
</body>
</html>