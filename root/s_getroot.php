<!DOCTYPE html>
<html>
<head>
    <title>Get Root</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        #map { 
            height: 600px; 
            width: 100%; 
        }
        .info-box {
            padding: 10px;
            background: white;
            margin: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="info-box">
        <h2>Complaint Locations Route</h2>
    </div>
    <div id="map"></div>

    <script>
        // Initialize map
        var map = L.map('map').setView([20.5937, 78.9629], 12);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Fetch complaint locations from database
        <?php
        $cn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($cn, "project");
        $query = "SELECT * FROM u_complaints WHERE status='Pending' ORDER BY created_at";
        $result = mysqli_query($cn, $query);

        echo "var locations = [";
        while($row = mysqli_fetch_assoc($result)) {
            echo "[" . $row['latitude'] . "," . $row['longitude'] . "," . "'" . $row['complaint_text'] . "'],";
        }
        echo "];";
        ?>

        // Draw markers and connect them with lines
        var latlngs = [];
        locations.forEach(function(loc, index) {
            // Add marker
            var marker = L.marker([loc[0], loc[1]]).addTo(map);
            marker.bindPopup("Location " + (index + 1) + "<br>" + loc[2]);
            
            // Add coordinates to line array
            latlngs.push([loc[0], loc[1]]);
        });

        // Draw route line connecting all points
        var routeLine = L.polyline(latlngs, {
            color: 'red',
            weight: 3,
            opacity: 0.7
        }).addTo(map);

        // Fit map bounds to show all markers
        if(latlngs.length > 0) {
            map.fitBounds(routeLine.getBounds());
        }
    </script>
</body>
</html>
