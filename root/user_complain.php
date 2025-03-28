<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/KLINZY.png" type="">

  <title> KLINZY </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <link herf =  "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel = "stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

   <!-- Leaflet CSS and JS -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
   <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
   <!-- Leaflet Search Plugin -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet-search/dist/leaflet-search.min.css" />
   <script src="https://unpkg.com/leaflet-search/dist/leaflet-search.min.js"></script>
   <style>
       #map { height: 500px; width: 1200px;
      margin-top: 50px;
      }
       .form-container { padding: 20px; }
       #searchBox {
           width: 100%;
           padding: 10px;
           margin-bottom: 10px;
       }
   </style>

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <div class="logo"><img src="images/KLINZY.png" height="50" width="50"></div>
            <span>
              KLINZY
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="complain.html">Complaint <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedback.html">Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- service section -->
  <div class="contact_section layout_padding" style="margin-top: 0%;">
   <div class="container" style="margin-top: 0%;">
  <div class="row">
   
   <div class="col-md-6">
      <h1 class="contact_text">COMPLAINT</h1>
            <h4 class="textt"><font size="4" color="white">Here you can register your complaint</font></h4>
          
            <div class="mail_sectin">
            <form id="register" method="POST" action = "save_complaint.php">
              <!-- <div class="input-container">
                <img src="images/user.png" alt="User Icon" class="icon">
                <input type="text" class="email-bt" placeholder="Title" name="complaint_title">
              </div>
              <div class="input-container">
                <img src="images/email.png" alt="Email icon" class="icon">
               <input type="email" class="email-bt" placeholder="Email" name="email">
               </div> -->
               <div class="input-container">
                <img src="images/garbage_type.png" alt="Garbage Icon" class="icon"> 
               <input type="text" class="email-bt" placeholder="Garbage Type" name="type">
               </div>
               <div class="input-container">
                <img src="images/comp.png" alt="Complaint Icon" class="icon">
               <input type="textarea" class="massage-bt" placeholder="Write your Complaint in detail..." rows="3" name="complaint">
               </div>
               <div class="input-container">
                <img src="images/location.jpg" alt="Location Icon"  class="icon">
               <input type="textarea" class="massage-bt" placeholder="Search Location in map..." rows="2" name="area">
               </div>
        
               <div class="send_bt">
                  <Button name="submit"  value= "Next" style="margin-left:15px; padding: 10px 20px; border-radius: 4px;  background-color:  rgb(19, 18, 18); color: white;"> Next  >> </button></div>
              
</form>
              </div>
   </div>
   <div class="col-md-6 " >
      <!-- <div class="img-box">
        <img src="images/photo_capture.webp" alt="">
      </div> -->
      <div class="file-upload" >
         <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Image</button>
       
         <div class="image-upload-wrap" >
          <img src="images/img_up.jpg" alt="image Icon" class="img-up" height="50px" width="50px">
           <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
           <div class="drag-text">
             <h3>Drag and drop a file or select upload Image</h3>
           </div>
         </div>
         <div class="file-upload-content">
           <img class="file-upload-image" src="#" alt="your image" />
           <div class="image-title-wrap">
             <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
           </div>
         </div>
       </div>
    </div>
 </div>
   </div>
   </div>



  <!-- <div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h1 class="contact_text">COMPLAINT</h1>
            <h4 class="textt"><font size="4" color="white">Here you can register your complaint</font></h4>
            <div class="mail_sectin">
            <form id="register" method="POST">
               <input type="text" class="email-bt" placeholder="Name" name="name">
               <input type="email" class="email-bt" placeholder="Email" name="email">
               <input type="textarea" class="massage-bt" placeholder="complaint" rows="5" name="comp">
               <div class="send_bt">
                  <Button name="submit"  style="margin-left:5px; "/> Submit </button></div>
              
</form>
              </div>
         </div> 
         
      </div>
   </div>
</div> -->

  <!-- end service section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>
              Info
            </h4>
            <p>
              necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="index.html">
                Home
              </a>
              <a class="" href="about.html">
                About
              </a>
              <a class="" href="service.html">
                Services
              </a>
              <a class="" href="why.html">
                Why Us
              </a>
              <a class="" href="team.html">
                Team
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info_col ">
          <h4>
            Subscribe
          </h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  

<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <!-- End Google Map -->


  <script>
    // Initialize map
    var map = L.map('map').setView([20.5937, 78.9629], 5);
    
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    var marker = L.marker([20.5937, 78.9629], {
        draggable: true
    }).addTo(map);

    // Search functionality
    document.getElementById('searchBox').addEventListener('input', function(e) {
        if(e.target.value.length > 2) {
            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${e.target.value}`)
                .then(response => response.json())
                .then(data => {
                    if(data.length > 0) {
                        const lat = parseFloat(data[0].lat);
                        const lon = parseFloat(data[0].lon);
                        marker.setLatLng([lat, lon]);
                        map.setView([lat, lon], 16);
                        updateCoordinates(lat, lon);
                    }
                });
        }
    });

    // Update coordinates when marker is dragged
    marker.on('dragend', function(e) {
        updateCoordinates(marker.getLatLng().lat, marker.getLatLng().lng);
    });

    // Update marker position on map click
    map.on('click', function(e) {
        marker.setLatLng(e.latlng);
        updateCoordinates(e.latlng.lat, e.latlng.lng);
    });

    function updateCoordinates(lat, lng) {
        document.getElementById('lat').value = lat;
        document.getElementById('lng').value = lng;
    }

    function validateForm() {
var lat = document.getElementById('lat').value;
var lng = document.getElementById('lng').value;
var complaint = document.getElementsByName('complaint')[0].value;

if(!lat || !lng) {
    alert('Please select a location on the map');
    return false;
}
if(!complaint) {
    alert('Please enter complaint details');
    return false;
}
return true;
}

</script> 
</body>

</html>
