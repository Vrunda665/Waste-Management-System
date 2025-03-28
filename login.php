

<?php
session_start();
$cn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cn,"project");
if(isset($_POST["submit"]))
{
   $n=$_POST["email"];
   $p=$_POST["password"];
//    $q=mysqli_query($cn,"SELECT * FROM `user_data` WHERE email='".$n."' and password='".$p."'");
    $sql = "SELECT * FROM user_data WHERE email = '$n'";
    $q =  mysqli_query($cn , $sql);
    $no=mysqli_num_rows($q);
   if($no==1)
   {   
    $user = $q->fetch_assoc();

    // Verify password
    if ($p == $user['password']) {
        // Store user data in session
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        header("Location: index.html");
        exit;
    } 
        // $_SESSION["email"]=$n;
        
        // header('Location:index.html');
    }
   else
   {
      $message="Data is not matched,please enter correct data";
     echo "<script type='text/javascript'>alert('$message');</script>";
    }
 }
?>