<html>
<head>
<title>KLINZY.com</title>
<link rel="stylesheet" href="stylelogin.css" type="text/css">
</head>
<body>
<div class="main">
<div class="register">
<h2>Login Here</h2>
<form id="register" method="post">
<label> Serviceman_ID </label>
<br>
<input type="text" name="serviceman_id" id="name" placeholder="Enter User Name">
<br><br>
<label>Password </label>
<br>
<input type="password" name="Password" id="name" placeholder="Enter Password">
<br>
<br>
<br>
<input type="submit" value="submit" name="submit" id="submit">
<h5><a href="sregist.php">please, click here to registration</a></h5>
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
   $n=$_POST["serviceman_id"];
   $p=$_POST["Password"];
   $q=mysqli_query($cn,"select*from serviceman where serviceman_id='".$n."' and Password='".$p."'");
   $no=mysqli_num_rows($q);
  if($no==1)
   { 
      $_SESSION["user"]=$n;
      header('Location:s_index.php');
    }
   else
   {
     echo "wrong";
    }
 }
?>
  
