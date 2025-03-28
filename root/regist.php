<html>
<head>
<title>KLINZY.com</title>
<link rel="stylesheet" href="style12.css" type="text/css">
</head>
<body>
<div class="main">
<div class="register">
<h2>Register Here</h2>
<form id="register" method="POST">
<label> Name </label>
<br>
<input type="text" name="user_id" id="name" placeholder="Enter Your Full Name">
<br><br>
<label>Password </label>
<br>
<input type="password" name="password" id="name" placeholder="Enter Your Password">
<br>
<br>
<label>Email </label>
<br>
<input type="email" name="email" id="name" placeholder="Enter Your Valid Email">
<br>
<br>
<label>Area </label>
<br>
<input type="text" name="area" id="name" placeholder="Enter Your Current Area Address">
<br>
<br>
<label>Address  </label>
<br>
<input type="text" name="address" id="name" placeholder="Enter Your Current Address">
<br>
<br>

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
$cn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cn,"project");
if(isset($_POST["submit"]));
{
  $n=$_POST["user_id"];
  $p=$_POST["password"];
  $e=$_POST["email"];
  $ap=$_POST["area"];
  $a=$_POST["address"];
 
  if(!empty($n) and !empty($p) and !empty($e) and !empty($a) and !empty($ap))
  {
      $q=mysqli_query($cn,"insert into user values('".$n."','".$p."','".$e."','".$ap."','".$a."')");
      if($q)
      {
        $message="Data inserted";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location:login.php');
       }
      else
      {
        $message12="Data Not inserted";
       echo "<script type='text/javascript'>alert('$message12');</script>";
      }
   }
  
}
?>