<?php
session_start();

// Database connection
$cn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($cn, "project");

if(isset($_POST['complaint'])) {
    // Get form data and sanitize inputs
    $latitude = mysqli_real_escape_string($cn, $_POST['latitude']);
    $longitude = mysqli_real_escape_string($cn, $_POST['longitude']); 
    $complaint = mysqli_real_escape_string($cn, $_POST['complaint']);
    $status = "Pending";
    $date = date('Y-m-d H:i:s');

    // Insert query with error checking
    $query = "INSERT INTO u_complaints (latitude, longitude, complaint_text, status, created_at) 
              VALUES ('$latitude', '$longitude', '$complaint', '$status', '$date')";

    if(mysqli_query($cn, $query)) {
        echo "<script>alert('Complaint submitted successfully!'); window.location.href='u_complaint.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($cn) . "'); window.location.href='u_complaint.php';</script>";
    }
}

mysqli_close($cn);
?>
