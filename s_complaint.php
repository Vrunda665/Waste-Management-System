<!DOCTYPE html>
<html>
<head>
   <title>Serviceman Complaints Dashboard</title>
   <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
   <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
   <style>
       .complaints-container {
           background-color: #f8f9fa;
           padding: 30px;
           border-radius: 10px;
           box-shadow: 0 0 20px rgba(0,0,0,0.1);
           max-width: 1000px;
           margin: 50px auto;
       }

       .complaints-title {
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

       .complaints-table {
           width: 100%;
           border-collapse: collapse;
           margin-top: 20px;
       }

       .complaints-table th, 
       .complaints-table td {
           padding: 12px;
           text-align: left;
           border-bottom: 1px solid #ddd;
       }

       .complaints-table th {
           background-color: #4CAF50;
           color: white;
       }

       .complaints-table tr:hover {
           background-color: #f5f5f5;
       }

       .upload-btn {
           background-color: #4CAF50;
           color: white;
           padding: 8px 15px;
           border: none;
           border-radius: 4px;
           cursor: pointer;
           transition: background-color 0.3s ease;
       }

       .upload-btn:hover {
           background-color: #45a049;
       }

       .status-pending {
           color: #ff6b6b;
           font-weight: bold;
       }

       .status-completed {
           color: #4CAF50;
           font-weight: bold;
       }
   </style>
</head>
<body>
   <div class="complaints-container">
       <h2 class="complaints-title">Complaints Dashboard</h2>
       <div id="map"></div>
        
       <table class="complaints-table">
           <thead>
               <tr>
                   <th>Complaint ID</th>
                   <th>Location</th>
                   <th>Description</th>
                   <th>Status</th>
                   <th>Action</th>
               </tr>
           </thead>
           <tbody>
               <?php
               $cn = mysqli_connect("localhost", "root", "");
               $db = mysqli_select_db($cn, "project");
               $query = "SELECT * FROM u_complaints ORDER BY status='Pending' DESC";
               $result = mysqli_query($cn, $query);

               while($row = mysqli_fetch_assoc($result)) {
                   echo "<tr>";
                   echo "<td>#" . $row['id'] . "</td>";
                   echo "<td>Lat: " . $row['latitude'] . "<br>Long: " . $row['longitude'] . "</td>";
                   echo "<td>" . $row['description'] . "</td>";
                   echo "<td class='status-" . strtolower($row['status']) . "'>" . $row['status'] . "</td>";
                   echo "<td>";
                   if($row['status'] == 'Pending') {
                       echo "<form action='update_status.php' method='post' enctype='multipart/form-data'>";
                       echo "<input type='hidden' name='complaint_id' value='" . $row['id'] . "'>";
                       echo "<input type='file' name='cleaning_photo' required>";
                       echo "<button type='submit' class='upload-btn'>Upload & Complete</button>";
                       echo "</form>";
                   } else {
                       echo "Completed";
                   }
                   echo "</td>";
                   echo "</tr>";
               }
               ?>
           </tbody>
       </table>
   </div>

   <script>
       var map = L.map('map').setView([20.5937, 78.9629], 12);
       L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

       <?php
       mysqli_data_seek($result, 0);
       while($row = mysqli_fetch_assoc($result)) {
           $status = $row['status'];
           $color = ($status == 'Pending') ? 'red' : 'green';
            
           echo "L.marker([" . $row['latitude'] . "," . $row['longitude'] . "], {
               icon: L.divIcon({
                   className: 'custom-marker',
                   html: '<div style=\"background-color: " . $color . "; width: 10px; height: 10px; border-radius: 50%;\"></div>'
               })
           }).bindPopup('ID: " . $row['id'] . "<br>Status: " . $status . "').addTo(map);";
       }
       ?>
   </script>
</body>
</html>