<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <title>TTPG</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
  
    <!-- MDB -->
    <link rel="stylesheet" href="../assets/css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="../assets/css/style.css" />
     <!-- Libraries Stylesheet -->
     
     <link
     href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
     rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
      <!--Main Navigation-->
  <header>
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
    .carousel-item {display:none;}
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media screen and (max-height: 450px) {
    .overlay a {font-size: 20px}
    .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
      }
    }

    .navbar .nav-link {
        color: #fff !important;
      }

    body {
      background: rgb(10, 204, 42);
      display: grid;
      place-items: center;
      height: 100%;
      width: 100%;
    }

    .table{
        font-family: tahoma;
        font-size: 24px;
        position: relative;
    }
  h1,h2,p,a{
		font-family: sans-serif;
		font-weight: normal;
	}
 
	.jam_analog {
		background: #e7f2f7;
		position: relative;
		width: 240px;
		height: 240px;
		border: 16px solid #52b6f0;
		border-radius: 50%;
		padding: 20px;
		margin:20px auto;
	}
	.xxx {
		height: 100%;
		width: 100%;
		position: relative;
	}
 
	.jarum {
		position: absolute;
		width: 50%;
		background: #232323;
		top: 50%;
		transform: rotate(90deg);
		transform-origin: 100%;
		transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
	}
 
	.lingkaran_tengah {
		width: 24px;
		height: 24px;
		background: #232323;
		border: 4px solid #52b6f0;
		position: absolute;
		top: 50%;
		left: 50%;
		margin-left: -14px;
		margin-top: -14px;
		border-radius: 50%;
	}
 
	.jarum_detik {
		height: 2px;
		border-radius: 1px;
		background: #F0C952;
	}
 
	.jarum_menit {
		height: 4px;
		border-radius: 4px;
	}
 
	.jarum_jam {
		height: 8px;
		border-radius: 4px;
		width: 35%;
		left: 15%;
	}
  canvas {
    padding-left: 0;
    padding-right: 0;
    margin-left: auto;
    margin-right: auto;
    display: block;
    width: auto;
}
    </style>

<body>
  <!-- Spinner Start -->
      <div id="spinner"
          class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
          <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
      </div>
      <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <br>
  <!-- Spinner End -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 1000;">
      <div class="px-2 bg-light "><marquee><h1><b>SELAMAT DATANG DI TERMINAL TERPADU PULO GEBANG</b></h1></marquee></div>
    </nav>
    <!-- Navbar -->
    <br>
    <div class="row">
      <div class="col-lg-5 col-md-5 mb-5">
        <div class="card">
          <table class="table">
            <thead class="btn-dark">
              <tr>
                <th colspan="5" style="vertical-align : middle;text-align:center" scope="col">Nama PO</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">SINAR JAYA</th>
                <td> </td>
                <td> </td>
                <td> </td>
                <td></td>
              </tr>
          
              <tr class="table-primary">
                <th scope="row">GUNUNG HARTA</th>
                <td></td>
                <td></td>
                <td></td>
                <td>   </td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">PAHALA KENCANA</th>
                <td> </td>
                <td>  </td>
                <td></td>
                <td></td>
              </tr>
              <tr class="table-success">
                <th scope="row"> </th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <br>
        <div class="card">
          <div class="modal-body" style="background-color: rgba(52, 103, 212, 0.15);">
            <div class="embed-responsive embed-responsive-21by9">
              <video autoplay loop muted playsinline>
              <source src="../assets/videos/video1.mp4" type="video/mp4">
            </div>
          </video> 
        </div>

        </div>
      
    </div>
      
      <div class="col-lg-3 col-md-3 mb-3">
        <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="../assets/img/bus/ttpg1.JPG" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
        </div>
        <br>
        <div class="card">
          <h1 class="text-center">PINTU 2 -- GATE 2 </h1>
      </div>
      
        <br>
        <div class="card">
          <canvas class="center" id="canvas" width="250" height="250"
          style="background-color:#f0f0f0">
          </canvas>
            </div>
          </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <table class="table">
            <thead class="btn-dark">
              <tr>
                <th colspan="3" style="vertical-align : middle;text-align:center" scope="col">Tujuan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">BREBES</th>
                <td>BUMIAYU</td>
                <td>TEGAL</td>
              </tr>
          
              <tr class="table-primary">
                <th scope="row">SLAWI</th>
                <td>PEMALANG</td>
                <td>PEKALONGAN</td>
              </tr>
              <tr class="table-secondary">
                <th scope="row">KENDAL</th>
                <td>SEMARANG</td>
                <td>PURWOKERTO</td>
              </tr>
              <tr class="table-success">
                <th scope="row">BANYUMAS</th>
                <td>KROYA</td>
                <td>AJI BARANG</td>
              </tr>
              <tr class="table-danger">
                <th scope="row">WANGON</th>
                <td>CILACAP</td>
                <td>PURBALINGGA</td>
              </tr>
              <tr class="table-warning">
                <th scope="row">GOMBONG</th>
                <td>BANJAR NEGARA</td>
                <td>KEBUMEN</td>
              </tr>
              <tr class="table-info">
                <th scope="row">PURWOREJO</th>
                <td>WONOSOBO</td>
                <td>YOGYAKARTA</td>
              </tr>
              <tr class="table-light">
                <th scope="row">SURABAYA</th>
                <td>MALANG</td>
                <td>-</td>
              </tr>
              
              <tr class="table-light">
                <th scope="row">PURWODADI</th>
                <td></td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
        </div>
          <br>
        <div class="card">
        <button class="btn btn-primary btn-lg active" role="button" onclick="openFullscreen();">Perikas Kembali Barang Bawaan Anda</button>
      </div>
      </div>


    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 1000;">
        <div class="px-2 bg-light "><h1><b><center>LAJUR 1 - LAJUR 2 - LAJUR 3 - LAJUR 4 - LAJUR 5 - LAJUR 6 - LAJUR 7</b></h1></div>
      </nav>
      
    </div>

    <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <div class="container py-3">
              <div class="row g-6">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                  
                    <img src="../assets/img/bus/pemda_dki.jpg" style="width:20%;" alt="img">
                    <hr class="bg-black w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                  <img src="../assets/img/bus/logo.jpeg" style="width:20%;" alt="img">
                    <hr class="bg-black w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                  <img src="../assets/img/bus/jaketbus.jpeg" style="width:20%;" alt="img">
                    <hr class="bg-primary w-25 mx-auto mb-0">
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                  <img src="../assets/img/bus/Logo_Dishub.png" style="width:20%;" alt="img">
                    <hr class="bg-primary w-25 mx-auto mb-0">
                </div>

            </div>
          </div>
    </div>
  </section>

  <script>
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var radius = canvas.height / 2;
    ctx.translate(radius, radius);
    radius = radius * 0.90
    setInterval(drawClock, 1000);
    function drawClock() {
    drawFace(ctx, radius);
    drawNumbers(ctx, radius);
    drawTime(ctx, radius);
    }
    function drawFace(ctx, radius) {
    var grad;
    ctx.beginPath();
    ctx.arc(0, 0, radius, 0, 2*Math.PI);
    ctx.fillStyle = 'white';
    ctx.fill();
    grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
    grad.addColorStop(0, '#FF1493');
    grad.addColorStop(0.5, 'white');
    grad.addColorStop(1, '#0000FF');
    ctx.strokeStyle = grad;
    ctx.lineWidth = radius*0.1;
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
    ctx.fillStyle = '#FF1493';
    ctx.fill();
    }
    function drawNumbers(ctx, radius) {
    var ang;
    var num;
    ctx.font = radius*0.15 + "px arial";
    ctx.textBaseline="middle";
    ctx.textAlign="center";
    for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
    }
    }
    function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
    }
    function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
    }
  
       
var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}
</script>
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
   

     <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/lib/wow/wow.min.js"></script>
  <script src="../assets/lib/easing/easing.min.js"></script>
  <script src="../assets/lib/waypoints/waypoints.min.js"></script>
  <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../assets/lib/counterup/counterup.min.js"></script>

  <!-- Template Javascript -->
  <script src="../assets/js/main.js"></script>
</body>
</html>