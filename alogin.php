<html>
<head>
<link rel="stylesheet" href="stylelogin.css" type="text/css">
<title>KLINZY.com</title>
</head>
<body>
<div class="main">
<div class="register">
<h2>Login Here</h2>
<form id="register" method="post">
<label> Name </label>
<br>
<input type="text" name="admin_id" id="name" placeholder="Enter Admin Name">
<br><br>
<label>Password </label>
<br>
<input type="password" name="password" id="name" placeholder="Enter Password">
<br>
<br>
<br>
<input type="submit" value="submit" name="submit" id="submit">
</form>
</div>
</div>
</body>
</html>
<?php
session_start();
$cn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cn,"project");
if(isset($_POST["submit"]))
{
   $n=$_POST["admin_id"];
   $p=$_POST["password"];
   $q=mysqli_query($cn,"select*from admin where admin_id='".$n."' and password='".$p."'");
   $no=mysqli_num_rows($q);
   if($no==1)
   {    
        $_SESSION["user"]=$n;
        header('Location:admin_user.php');
    }
   else
   {
      $message="Data is not matched,please enter correct data";
     echo "<script type='text/javascript'>alert('$message');</script>";
    }
 }
?>
  
