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
               <div class="logo"><a href="index.html"><img src="images/KLINZY.png" height="150px" width="150px"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="s_index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="s_wastearea.php">Waste Area</a>
                     </li>   
					<li class="nav-item">
                        <a class="nav-link" href="s_feedback.php">Feedback</a>
                     </li>   					 
                     <li class="nav-item">
                        <a class="nav-link" href="s_contact.php">Contact</a>
                     </li>
                  </ul>
                  <a href="profile.php"><img src="images/profile.png" width="25px" height="25px" style="margin-right:10px"/></a>

<?php
session_start();
echo "WELCOME ".$_SESSION["user"];
?>
                  <div class="search_icon">
                     <ul>
                       
                        <li><a href="new1.php">LOGOUT</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>




      <!-- header section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <h1 class="contact_text">ATTENDANCE</h1>
                  <div class="mail_sectin">
                 
         
               <form method="POST">
               <input type="text" name="serviceman_id" id="name" placeholder="Enter Your serviceman_id"/> 
               <br>
               <br>          
	<input style="font-size:50px" type="radio" name="s_attendance" value="present"> Present<br />
					 <input style="font-size:50px" type="radio" name="s_attendance" value="absent">  Absent<br />
                     <div class="send_bt"><Button value="submit" name="submit" id="submit" style="margin:0px; width:150px; height:50px;" >SEND</button></div>

</form>      
					
				</div>
               </div>
             
            </div>
         </div>
      </div>
      <div class="furnitures_section layout_padding">
      </div>


      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                 <h1 class="customer_text">Let's Clean Environment</h1>
                  <p class="footer_lorem_text">Desire to dwell in clean environment. The environment is where we all meet; where we all have a mutual interest; it is the one thing all of us share.
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">LET US HELP YOU</h1>
                  <p class="footer_lorem_text">We take the garbage from everyone's house and clean any area of the city according to the location given by the person.
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">INFORMATION</h1>
                  <p class="footer_lorem_text1">About Us<br>
                     Press & News<br>
                     Competition<br>
                     Terms & Conditions
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">OUR Website</h1>
                  <p class="footer_lorem_text">KLINZY is privately created for all people in the city to keep the environment clean.
                  </p>
               </div>
            </div>

            </div>
         </div>
      </div>
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
         <p class="copyright_text">2023 All Rights Reserved. Design by KLINZY</a></p>
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
<?php
$cn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($cn,"project");
if(isset($_POST["submit"]))
{
    $v=$_POST["serviceman_id"];
    $n=$_POST["s_attendance"];
    if(!empty($n))
    {
       $q=mysqli_query($cn,"insert into s_attend values('".$v."','".$n."')");
       if($q)
       {
         $message="Your attandance sent successfully";
         echo "<script type='text/javascript'>alert('$message');</script>";
       }
      else
      {
        $message12="Your attandance  not sent successfully";
        echo "<script type='text/javascript'>alert('$message12');</script>";
      }
    }
   else
    {
       $message13="please select one option";
       echo "<script type='text/javascript'>alert('$message13');</script>";
    }
 }
?>