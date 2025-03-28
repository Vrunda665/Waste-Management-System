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
               <div class="logo"><img src="images/KLINZY.png" height="200" width="150"></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    
                     <li class="nav-item">
                        <a class="nav-link" href="admin_user.php">User </a>
                     </li>   
					  <li class="nav-item">
                        <a class="nav-link" href="admin_service.php">Serviceman </a>
                     </li>
					<li class="nav-item">
                        <a class="nav-link" href="admin_pictures.php">pictures</a>
                     </li>   					 
                    
                  </ul>
                   <img src="images/profile.png" width="25px" height="25px" style="margin-right:10px"/>
                   <?php
  session_start();
  echo "WELCOME ".$_SESSION["user"];
?>

                 &nbsp &nbsp

                 <div class="search_icon">
                     <ul>
                       
                        <li><a href="new1.php">LOGOUT</a></li>
                     </ul>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end --> 
      <!-- about section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">   
                  <table>
					<?php
	$cn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($cn,"project");
		$q=mysqli_query($cn,"select * from image") or die(mysqli_error());
		while($row=mysqli_fetch_array($q))
		{
         ?>
         <tr><?php
			 echo '<a href=# ><img height=200 width=200
         src="data:image/jpeg;base64,'.base64_encode( $row[2] ).'"/></a>&nbsp&nbsp&nbsp';?></tr>
         <?php
		}?>
	
</table>
               </div>               
            </div>
         </div>
      </div>
      <!-- about section end -->
	  <div class="furnitures_section layout_padding">
      </div>
      <!-- footer section start -->
     
      <!--  footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
      <div class="container">
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="images/fb-icon.png"></a></li>
               <li><a href="#"><img src="images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="images/instagram-icon.png"></a></li>
               <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
            </ul>
         </div>
         <p class="copyright_text">2023 All Rights Reserved. Design by KLINZY</p>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>