<?php
$cn = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($cn, "project");

if(isset($_POST['complaint_id']) && isset($_FILES['cleaning_photo'])) {
    $complaint_id = $_POST['complaint_id'];
    $image = addslashes(file_get_contents($_FILES['cleaning_photo']['tmp_name']));
    
    $query = "UPDATE u_complaints SET 
              status = 'Done',
              cleaning_photo = '$image',
              completed_at = NOW() 
              WHERE id = '$complaint_id'";
              
    if(mysqli_query($cn, $query)) {
        echo "<script>alert('Status updated successfully!'); window.location.href='s_updatestatus.php';</script>";
    } else {
        echo "<script>alert('Error updating status!'); window.location.href='s_updatestatus.php';</script>";
    }
}
?>
