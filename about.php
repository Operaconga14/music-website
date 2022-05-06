<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Opera Music</title>
    <!-- Opera Music icon -->
    <link rel="icon" href="./assets/images/logo.svg" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>

    <!-- My styles -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Start your project here-->

    <header class="sticky-top">
      <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-sm navbar-md nav navbar-dark bg-dark sticky-top">
  <!-- Container wrapper -->
  <div class="container-fluid sticky-top">
    <!-- Toggle button -->
    <button
      class="navbar-toggler sticky-top"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse sticky-top" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0 logo-b-link" href="#">
        <img
          src="./assets/images/logo.svg"
          height="25"
          alt="OPERAMUSIC Logo"
          loading="lazy"
        />MUSIC
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">Music List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->

    <!-- Login Button -->
    <a class="btn btn-primary" href="./login.php" style="margin-right: 0.1in;">Login</a>


    <!-- Facebook Icon -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <img src="./assets/icons/facebook.svg" width="28" height="28">
      </a>

     <!-- Telegram Icon -->
     <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <img src="./assets/icons/telegram.svg" width="28" height="28">
      </a>

      <!-- Twitter Icon -->
      <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <img src="./assets/icons/twitter.svg" width="28" height="28">
      </a>
      
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
    </header>

    <main>
      <!-- Carousel -->
      <div class="carousel slide carousel-fade" id="carouselInterface">
        

      </div>
      <!-- Carousel or Banner-->
      <div class="container-fluid bg-dark" align="center" style="padding-top: 2in; padding-bottom: 2in; color:white;">
        <div class="row container">
          
          <!-- First Colunm -->
          <div class="col col-6 col-sm-4" >
            <!-- Heading -->
            <h1>Welcome To Opera Music</h1>
            <!-- Sub Heading -->
            <p>One of the best site to download and listen to music</p>
            <a class="btn btn-success" href="./list.php">Listen Now</a>
          </div>

          <!-- Second Colunm -->
          <div class="col col-6 col-sm-4">
            <img src="./assets/icons/phonemus.svg" height="270in">
          </div>
        </div>
      </div>

      <!-- Heading -->
      <h1 class="title-b" align="center" style="margin-top: 1in; margin-bottom: 1in; ">Opera Music Features</h1>

      <!-- Cards -->

      <div class="row container-fluid gen-margin" align="center">
        
        <!-- First Col -->
        <div class="col-6 col-sm-3">
          <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="./assets/images/banner.png" class="img-fluid">
            <a href="#">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            <div class="card-body">
              <h5 class="card-title">Listen to Music</h5>
              <p class="card-text">You can Stream your favourite songs directly from our site</p>
            </div>
          </div>
          </div>
        </div>
        
        <!-- Second Col -->
        <div class="col-6 col-sm-3">
          <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="./assets/images/banner.png" class="img-fluid">
            <a href="#">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            <div class="card-body">
              <h5 class="card-title">Listen to Music</h5>
              <p class="card-text">You can Stream your favourite songs directly from our site</p>
            </div>
          </div>
          </div>
        </div>

        <!-- Third Col -->
        <div class="col-6 col-sm-3">
          <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="./assets/images/banner.png" class="img-fluid">
            <a href="#">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            <div class="card-body">
              <h5 class="card-title">Listen to Music</h5>
              <p class="card-text">You can Stream your favourite songs directly from our site</p>
            </div>
          </div>
          </div>
        </div>

        <!-- Fourth Col-->
        <div class="col-6 col-sm-3">
          <div class="card">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="./assets/images/banner.png" class="img-fluid">
            <a href="#">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            <div class="card-body">
              <h5 class="card-title">Listen to Music</h5>
              <p class="card-text">You can Stream your favourite songs directly from our site</p>
            </div>
          </div>
        </div>
        </div>
      </div>

    <!-- Brief About Section -->
    <div class="card gen-margin pb-4">
      <div class="container ">
          <h1 class="title-b ">About Opera Music</h1>
          <p class="text-b">Opera Music is a site where you stream and download your favourite music songs for free</p>
          <a class="btn btn-primary" href="./about.php"> Learn More</a>
        </div>
    </div>

    <!-- Playlist Section -->
    <div class="container-fluid gen-margin">
      <div class="container container-xxl container-xl container-sm container-md">
      <h1 class="title-b">Top Artist</h1>
      <div class="row">
        <!-- Colunm 1 -->
        <div class="col-6 col-sm-3">
          <div class="card">
            <img src="./assets/images/banner.png">
            <div class="card-body">
              <h5 class="card-title">Wizkid</h5>
              <p class="card-text">Wizkid is a porpular hip-hop musician</p>
              <a class="btn btn-primary" href="#">Listen</a>
            </div>
          </div>  
        </div>

        <!-- Colunm 2 -->
        <div class="col-6 col-sm-3">
          <div class="card">
            <img src="./assets/images/banner.png">
            <div class="card-body">
              <h5 class="card-title">Wizkid</h5>
              <p class="card-text">Wizkid is a porpular hip-hop musician</p>
              <a class="btn btn-primary" href="#">Listen</a>
            </div>
          </div>  
        </div>

        <!-- Colum 3 -->
        <div class="col-6 col-sm-3">
          <div class="card">
            <img src="./assets/images/banner.png">
            <div class="card-body">
              <h5 class="card-title">Wizkid</h5>
              <p class="card-text">Wizkid is a porpular hip-hop musician</p>
              <a class="btn btn-primary" href="#">Listen</a>
            </div>
          </div>  
        </div>

        <!-- Colum 4 -->
        <div class="col-6 col-sm-3">
          <div class="card">
            <img src="./assets/images/banner.png">
            <div class="card-body">
              <h5 class="card-title">Wizkid</h5>
              <p class="card-text">Wizkid is a porpular hip-hop musician</p>
              <a class="btn btn-primary" href="#">Listen</a>
            </div>
          </div>  
        </div>

        <!-- Colum 5 -->
        <div class="col-6 col-sm-3 mt-4">
          <div class="card">
            <img src="./assets/images/banner.png">
            <div class="card-body">
              <h5 class="card-title">Wizkid</h5>
              <p class="card-text">Wizkid is a porpular hip-hop musician</p>
              <a class="btn btn-primary" href="#">Listen</a>
            </div>
          </div>  
        </div>

        <!-- Colum 6 -->
        <div class="col-6 col-sm-3 mt-4">
          <div class="card">
            <img src="./assets/images/banner.png">
            <div class="card-body">
              <h5 class="card-title">Wizkid</h5>
              <p class="card-text">Wizkid is a porpular hip-hop musician</p>
              <a class="btn btn-primary" href="#">Listen</a>
            </div>
          </div>  
        </div>

        <!-- Colum 7 -->
        <div class="col-6 col-sm-3 mt-4">
          <div class="card">
            <img src="./assets/images/banner.png">
            <div class="card-body">
              <h5 class="card-title">Wizkid</h5>
              <p class="card-text">Wizkid is a porpular hip-hop musician</p>
              <a class="btn btn-primary" href="#">Listen</a>
            </div>
          </div>  
        </div>

        <!-- Colum 8 -->
        <div class="col-6 col-sm-3 mt-4">
          <div class="card">
            <img src="./assets/images/banner.png">
            <div class="card-body">
              <h5 class="card-title">Wizkid</h5>
              <p class="card-text">Wizkid is a porpular hip-hop musician</p>
              <a class="btn btn-primary" href="#">Listen</a>
            </div>
          </div>  
        </div>
        <!-- End of Colum -->

        </div>
      </div>
    </div>
        
        <!-- End of Main -->
    </main>

    <footer class="bg-dark foot-set">Copyright &copy; 2021 Opera Music</footer>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
