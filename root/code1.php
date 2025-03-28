<?php
$cn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cn,"project");
if(isset($_POST['delete']))
{
    $user_id=$_POST['delete'];
    $q="delete from serviceman where serviceman_id='$user_id'";
    $query_run=mysqli_query($cn,$q);
    if($query_run)
    {
        $_SESSION['message']="user deleted successfully";
        header('Location:udisplay.php');
        exit(0);
    }
    else
    { 
        $_SESSION['message']="user not deleted";
        header('Location:udisplay.php');
        exit(0);
    }
}
?>