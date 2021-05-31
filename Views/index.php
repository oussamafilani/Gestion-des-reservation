<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Home - Hotel</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <!-- CSS Footer -->
  <link href="css/footer.css" rel="stylesheet" />
</head>

<body id="page-top">

  <!-- Navigation-->

  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a href="../Views/index.php" class="navbar-brand js-scroll-trigger" href="#page-top">Boking Hotel</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Contact Us</a>
          </li>

          <a href="../Views/login.php" class="nav mr-2">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">login</button>
          </a>

          <a href="../Views/register.php" class="nav mr-2">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign up</button>
          </a>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead-->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">
            Find the best hotels for your next trip

          </h1>
          <hr class="divider my-4" />
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">
            For most travel planning, the best overall strategy is to compare prices from multiple sources including the hotel’s own website!
          </p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </div>
  </header>

  <!-- card section -->
  <section class="about-cards-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 card-wrapper">
          <div class="card border-0">
            <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image">
              <img class="w-100 h-100" src="https://source.unsplash.com/910x592" alt="Card image cap">
            </div>
            <div class="card-body text-center mt-4">
              <h3 class="text-uppercase card-title">Our APPRTEMENTS</h3>
              <p class="card-text">A short caption detailing an aspect of the brand which is worth mentioning.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 card-wrapper">
          <div class="card border-0">
            <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image">
              <img class="w-100 h-100" src="https://source.unsplash.com/1230x802" alt="Card image cap">
            </div>
            <div class="card-body text-center mt-4">
              <h3 class="text-uppercase card-title">Our ROOMS</h3>
              <p class="card-text">A short caption detailing an aspect of the brand which is worth mentioning.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 card-wrapper">
          <div class="card border-0">
            <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image">
              <img class="w-100 h-100" src="https://source.unsplash.com/1230x794" alt="Card image cap">
            </div>
            <div class="card-body text-center mt-4">
              <h3 class="text-uppercase card-title">Our BUNGALOW</h3>
              <p class="card-text">A short caption detailing an aspect of the brand which is worth mentioning.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- card section -->
  <!-- footer -->

  <?php include_once '../includes/footer.include.php'; ?>

  <!-- Bootstrap core JS-->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/nav.js"></script>
</body>

</html>