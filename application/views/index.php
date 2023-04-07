<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TTPG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="refresh" content="100" />
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./assets/img/bus/Logo_Dishub.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<style>
* {
  box-sizing: border-box;
}
img {
  width: auto;
  height: auto;

  display: block;
  margin-left: auto;
  margin-right: auto;

}

body {
  font-family: Arial, Helvetica, sans-serif;
}
.carousel-item {display:none;}

/* Style the header */
header {
  background-color: rgb(102, 102, 102);
  padding: 50px;
  text-align: center;
  font-size: 35px;
  color: rgb(255, 255, 255);
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: rgb(243, 4, 4);
  padding: 50px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 70;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>

<body>
  <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-3">
          <div class="row g-12">
              <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                
                  <img src="./assets/img/bus/pemda_dki.jpg" style="width:20%;" alt="img">
                  <hr class="bg-black w-25 mx-auto mb-0">
              </div>
              <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <img src="./assets/img/bus/logo.jpeg" style="width:20%;" alt="img">
                  <hr class="bg-black w-25 mx-auto mb-0">
              </div>
              <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <img src="./assets/img/bus/jaketbus.jpeg" style="width:20%;" alt="img">
                  <hr class="bg-primary w-25 mx-auto mb-0">
              </div>
              <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <img src="./assets/img/bus/Logo_Dishub.png" style="width:20%;" alt="img">
                  <hr class="bg-primary w-25 mx-auto mb-0">
              </div>
        </div>
  </div>
<header>
  
  <button onClick="window.location.href = '<?php echo base_url();?>Welcome/pintu2';return false;" onclick="openFullscreen();">Pintu2</button>
  
  <button onClick="window.location.href = '<?php echo base_url();?>Welcome/pintu4';return false;" onclick="openFullscreen();">Pintu4</button>

  <button onClick="window.location.href = '<?php echo base_url();?>Welcome/pintu7';return false;" onclick="openFullscreen();">Pintu7</button>

  <button onClick="window.location.href = '<?php echo base_url();?>Welcome/pintu9';return false;" onclick="openFullscreen();">Pintu9</button>
  <button onClick="window.location.href = '<?php echo base_url();?>Welcome/video';return false;" onclick="openFullscreen(myvideo);" >Video</button>
  <button onClick="window.location.href = '<?php echo base_url();?>Welcome/himbau';return false;" onclick="openFullscreen();" >Himbau</button>
</header>
<section>
  <div class="has-bg-img">
  
    <img class="bg-img" src="./assets/img/bus/ttpg1.JPG" alt="TTPG">
  </div>
</section>


<footer>
    <div class="px-2 bg-light "><marquee class="py-3"><H1><b>TERMINAL TERPADU PULO GEBANG</b></H1></marquee></marquee></h1></div>
</footer>

<script>
function openFullscreen() {
function openFullscreen(ID) {
	var elem = document.getElementById(ID);
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/lib/wow/wow.min.js"></script>
  <script src="./assets/lib/easing/easing.min.js"></script>
  <script src="./assets/lib/waypoints/waypoints.min.js"></script>
  <script src="./assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="./assets/lib/counterup/counterup.min.js"></script>

  <!-- Template Javascript -->
  <script src="./assets/js/main.js"></script>
</body>
</html>
