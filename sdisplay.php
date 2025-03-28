<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>KLINZY.com</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/KLINZY.png" type="image/png" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	  
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><img src="images/KLINZY.png" height="200" width="200"></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               
				  
                  
					
                  </div>
               </div>
            </nav>
         </div>
      </div>
<div class="banner_section layout_padding">
  <center>
<table border="2" align="center" cellspacing="5" cellpadding="2" width="1000" height="150">
<tr>
<th>serviceman_id</th>
<th>Email</th>
<th></th>
</tr>
<?php
$cn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cn,"project");
$q=mysqli_query($cn,"select * from serviceman");
while($r=mysqli_fetch_array($q))
{
  echo"<tr>";
  echo"<td>".$r["serviceman_id"]."</td>";
  echo"<td>".$r["email"]."</td>";
  ?>
  <td><button type="submit" name="assign" value="assign" style="background:green; width:90px; height:50px;">Assign</button></td>
   <?php
   echo"</tr>";
 }
 ?>
</table>
<center>
</div>
</body>
</html>
  