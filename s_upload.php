<!DOCTYPE html>
<html>
<head>
    <title>Update Cleaning Status</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        .upload-container {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            max-width: 800px;
            margin: 50px auto;
        }

        .upload-title {
            color: #1f1f1f;
            font-size: 32px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        #map { 
            height: 400px; 
            width: 100%;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .upload-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .location-select {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            width: 100%;
        }

        .file-input {
            border: 2px dashed #4CAF50;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .submit-button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Update Cleaning Status</h2>
        <div id="map"></div>
        
        <?php
        $cn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($cn, "project");
        $query = "SELECT * FROM u_complaints WHERE status='Pending'";
        $result = mysqli_query($cn, $query);
        ?>

        <div class="status-form">
            <form action="update_status.php" method="post" enctype="multipart/form-data">
                <select name="complaint_id" required>
                    <option value="">Select Location</option>
                    <?php
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id'] . "'>Location: " . $row['latitude'] . ", " . $row['longitude'] . "</option>";
                    }
                    ?>
                </select>
                <br><br>
                <input type="file" name="cleaning_photo" required>
                <br><br>
                <input type="submit" value="Mark as Complete">
            </form>
        </div>
    </div>

    <script>
        var map = L.map('map').setView([20.5937, 78.9629], 12);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        <?php
        mysqli_data_seek($result, 0);
        while($row = mysqli_fetch_assoc($result)) {
            echo "L.marker([" . $row['latitude'] . "," . $row['longitude'] . "])
                    .bindPopup('ID: " . $row['id'] . "<br>Status: " . $row['status'] . "')
                    .addTo(map);";
        }
        ?>
    </script>
</body>
</html>
