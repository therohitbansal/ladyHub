<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ladyhub-Security</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Bootstrap 5 CDN Links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Custom File's Link -->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="responsive-style.css"> -->
  <link rel="stylesheet" href="CSS/security.css">
  <audio id="myAudio">
    <source src="Iphone Alarm.mp3" type="audio/mpeg">
  </audio>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="100">

  <!-- Navbar section -->
  <header class="header_wrapper" style="background-color: #fff;box-shadow:0 0 8px 3px rgba(146, 142, 142, 0.452)">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/icon1.png" class="img-fluid" style="width:80px; height:80px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav  menu-navbar-nav" style="gap:3.5rem">
            <li class="nav-item">
              <a class="nav-link"  href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FindGroup.php">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ConsultWithDoctor.php">Consult</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Blog.php">Security</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="buttons-div mt-5">
    <button onclick="playAudio()" type="button">SOS Alert</button>
    <button onclick="pauseAudio()" type="button">Stop Alert</button>
  </div>
  <!-- Navbar section exit -->
  <section class="security-section my-5 py-5">
    <div class="container-security">
      <div class="card-security">
        <div class="imgBx-security">
          <img src="./UKD69.png">
        </div>
        <div class="contentBx-security">
          <br>
          <h2>Contact Nearby Police Station</h2>
            <br>
            <div class="size-security">
              <!-- <button onclick="toLocation()" style="cursor: pointer;">Try It</button> -->
            </div>
            <br>
            <a onclick="toLocation()" style="cursor: pointer;">Police Stations</a>
        </div>
      </div>
    </div>
    <div class="container-security">
      <div class="card-security">
        <div class="imgBx-security">
          <img src="./SC.png">
        </div>
        <div class="contentBx-security">
          <br>
          <h2>Speed Contact</h2>
          <br>
          <div class="size-security">
            <!-- <button onclick="toLocation()" style="cursor: pointer;">Try It</button> -->
          </div>
          <br>
          <a href="tel:+4733378901" style="cursor: pointer;">Speed Dial 1</a>
        </div>
      </div>
    </div>
    <div class="container-security">
      <div class="card-security">
        <div class="imgBx-security">
          <img src="./SC.png">
        </div>
        <div class="contentBx-security">
          <br>
          <h2>Speed Contact</h2>
          <br>
          <div class="size-security">
            <!-- <button onclick="toLocation()" style="cursor: pointer;">Try It</button> -->
          </div>
          <br>
          <a href="tel:+4733378901" style="cursor: pointer;">Speed Dial 2</a>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="footer_wrapper wrapper">
    <div class="container pb-3">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mt-4">
          <h5>Ladyhub Office</h5>
          <p class="ps-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim erat ut
            laoreet
            pharetra....</p>
          <div class="contact-info">
            <ul class="list-unstyled p-0">
              <li><a href="#"><i class="fa fa-home me-3"></i> Jadavpur University , Kolkata</a></li>
              <li><a href="#"><i class="fa fa-phone me-3"></i>+91 8100522467</a></li>
              <li><a href="#"><i class="fa fa-envelope me-3"></i>ladyhub2022@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mt-4">
          <h5>More Links</h5>
          <ul class="link-widget p-0">
            <!-- <li><a href="#">About Us</a></li> -->
            <!-- <li><a href="#">Our Office</a></li> -->
            <li><a href="#">Delivery</a></li>
            <!-- <li><a href="#">Our Store</a></li> -->
            <li><a href="#">Guarantee</a></li>
            <li><a href="#">Buy Gift Card</a></li>
            <li><a href="#">Return Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mt-4">
          <h5>More Links</h5>
          <ul class="link-widget p-0">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Our Office</a></li>
            <!-- <li><a href="#">Delivery</a></li> -->
            <li><a href="#">Our Store</a></li>
            <!-- <li><a href="#">Guarantee</a></li> -->
            <!-- <li><a href="#">Buy Gift Card</a></li> -->
            <!-- <li><a href="#">Return Policy</a></li> -->
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4 mt-4">
          <h5>Newsletter</h5>
          <div class="form-group mb-4">
            <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
            <button type="submit" class="main-btn rounded-2 mt-3 border-white text-white">Subscribe</button>
          </div>
          <h5>Stay Connected</h5>
          <ul class="social-network d-flex align-items-center p-0 ">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
          </ul>
        </div>



      </div>
    </div>
    <div class="container-fluid copyright-section">
      <p class="p-0">Copyright <a href="#">@Ladyhub</a>2022 All Rights Reserved</p>
    </div>
  </section>



  <!-- Bootstrap 5 JS CDN Links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
  <script>
    var x = document.getElementById("demo");
    function toLocation() {
      window.open("https://maps.google.com/maps?q=police+near+me");
    }
    var z = document.getElementById("myAudio");

    function playAudio() {
      z.play();
    }

    function pauseAudio() {
      z.pause();
    } 
  </script>

  <!-- Custom Js Link -->
  <script src="main.js"></script>
</body>

</html>