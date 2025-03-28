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
<label> Serviceman_ID</label>
<br>
<input type="text" name="serviceman_id" id="name" placeholder="Enter Your Full Name"/>
<br><br>
<label>Password  </label>
<br>
<input type="password" name="password" id="name" placeholder="Enter Your Password"/>
<br><br>
<label>Email </label>
<br>
<input type="email" name="email" id="name" placeholder="Enter Your Valid Email"/>
<br>
<br>
<label>Mobile No </label>
<br>
<input type="number" name="serviceman_mobile" id="name" placeholder="Enter Your Mobile Number"/>
<br>
<br>
<br>
<br>
<input type="submit" value="submit" name="submit" id="submit"/>
</form>
</div>
</div>
</body>
</html>

<?php
$cn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cn,"project");
if(isset($_POST["submit"]))
{
  $no=$_POST["serviceman_id"];
  $p=$_POST["password"];
  $e=$_POST["email"];
  $m=$_POST["serviceman_mobile"];
  if(!empty($no) and !empty($p) and !empty($e) and !empty($m))
  {
      $q=mysqli_query($cn,"insert into serviceman values('".$no."','".$p."','".$e."',".$m.")");
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
  else
   {
     $message13="please enter data ";
     echo "<script type='text/javascript'>alert('$message13');</script>";
   }
}
?>