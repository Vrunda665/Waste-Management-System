<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KLINZY</title>
  <link rel="stylesheet" href="css/stylereg.css">
</head>
<body>
  <div class="wrapper">
    <form method = "POST">
      <h2>Create New Account</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/reg_img.png" alt="">
          </div>
        </div>
      <div class="col-md-6">

      <div class="input-field">
       
        <input type="text" name = "name" required>
        <label>Enter Name</label>
      </div>
      <div class="input-field">
        <input type="password" name ="password" required>
        <label>Create Password</label>
      </div>
        <div class="input-field">
        <input type="text"  name= "email" required>
        <label>Enter Email</label>
      </div>
      <div class="input-field">
        <input type="tel" name= "mo" required>
        <label>Enter Contact Number</label>
      </div>
      
      <div class="input-field">
        <input type="text" name = "address" required>
        <label>Enter Address</label>
      </div>
      <button type="submit" value="submit" name="submit" id="submit">Submit</button>
      <div class="register">
        <p>Do you have an account? <a href="login.html">Login</a></p>
      </div>
      </div>
    </div>
    </form>
  </div>
</body>
</html> -->


<?php
$cn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cn,"project");
if (mysqli_connect_error()) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["submit"]));
{
  $n=$_POST["name"];
  $p=$_POST["mo"];
  $e=$_POST["email"];
  $ap=$_POST["password"];
  $a=$_POST["address"];
 
  if(!empty($n) and !empty($p) and !empty($e) and !empty($a) and !empty($ap))
  {
      $q=mysqli_query($cn,"INSERT INTO `user_data`(username , password , email , mobile, address) VALUES('".$n."','".$p."','".$e."','".$ap."','".$a."')");
      if($q)
      {
        $message="Data inserted";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location:login.html');
       }
      else
      {
        $message12="Data Not inserted";
       echo "<script type='text/javascript'>alert('$message12');</script>";
      }
   }
  
}
?>