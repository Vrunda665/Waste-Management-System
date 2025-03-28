<?php
$cn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cn,"project");
if(isset($_POST["submit"]));
{
  $na=$_POST["complaint_title"];
  $em=$_POST["email"];
  $t=$_POST["type"];
  $area=$_POST["area"];
  $cm=$_POST["complaint_description"];	
  
  if(!empty($na) and !empty($em) or !empty($cm))
  {
     $q=mysqli_query($cn,"INSERT INTO complaints(user_email, complaint_title , type , area , complaint_description) VALUES('".$em."','".$na."','".$t."','".$area."','".$cm."')");
     if($q)
     {
      $message="Your complaint successfully sent";
      echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location:index.html');
     }
     else
     {
       $message12="complaint Not send ";
       echo "<script type='text/javascript'>alert('$message12');</script>";
     }
  }
  
}
?>
