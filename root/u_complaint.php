<!DOCTYPE html>
<html>
<head>
    <title>Submit Complaint</title>
    <!-- Leaflet CSS and JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <!-- Leaflet Search Plugin -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-search/dist/leaflet-search.min.css" />
    <script src="https://unpkg.com/leaflet-search/dist/leaflet-search.min.js"></script>
    <style>
        #map { height: 400px; width: 100%; }
        .form-container { padding: 20px; }
        #searchBox {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Submit Your Complaint</h2>
        <input type="text" id="searchBox" placeholder="Search location...">
        <div id="map"></div>
        <br>
        <form action="index.html" method="post" onsubmit="return validateForm()">

<input type="hidden" id="lat" name="latitude">
            <input type="hidden" id="lng" name="longitude">
            <textarea name="complaint" rows="4" cols="50" placeholder="Enter your complaint details"></textarea>
            <br><br>
            <input type="submit" value="Submit Complaint">
        </form>
    </div>

    <script>
        // Initialize map
        var map = L.map('map').setView([20.5937, 78.9629], 5);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        var marker = L.marker([20.5937, 78.9629], {
            draggable: true
        }).addTo(map);

        // Search functionality
        document.getElementById('searchBox').addEventListener('input', function(e) {
            if(e.target.value.length > 2) {
                fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${e.target.value}`)
                    .then(response => response.json())
                    .then(data => {
                        if(data.length > 0) {
                            const lat = parseFloat(data[0].lat);
                            const lon = parseFloat(data[0].lon);
                            marker.setLatLng([lat, lon]);
                            map.setView([lat, lon], 16);
                            updateCoordinates(lat, lon);
                        }
                    });
            }
        });

        // Update coordinates when marker is dragged
        marker.on('dragend', function(e) {
            updateCoordinates(marker.getLatLng().lat, marker.getLatLng().lng);
        });

        // Update marker position on map click
        map.on('click', function(e) {
            marker.setLatLng(e.latlng);
            updateCoordinates(e.latlng.lat, e.latlng.lng);
        });

        function updateCoordinates(lat, lng) {
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
        }

        function validateForm() {
    var lat = document.getElementById('lat').value;
    var lng = document.getElementById('lng').value;
    var complaint = document.getElementsByName('complaint')[0].value;

    if(!lat || !lng) {
        alert('Please select a location on the map');
        return false;
    }
    if(!complaint) {
        alert('Please enter complaint details');
        return false;
    }
    return true;
}

    </script>
</body>
</html>

