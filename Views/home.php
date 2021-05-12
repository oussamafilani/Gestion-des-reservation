<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- font awesome -->
  <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./css/bootstrap.min.css" />

  <!-- CSS Style -->
  <link rel="stylesheet" href="./css/home.css" />

  <title>Hello, world!</title>
</head>

<body>
  <div class="">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-custom">
        <a class="navbar-brand" href="#">Hotel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
          <!-- <form class="form-inline my-2 my-lg-0"> -->
          <a type="button" class="btn center-block btn-light mr-sm-2" href="register.php">
            Sign Up
          </a>

          <a type="button" class="btn center-block btn-light my-2 my-sm-0" href="login.php">
            Login
          </a>
          <!-- </form> -->
        </div>
      </nav>
    </header>

    <section class="header-container"></section>

    <div class="header__text-box">
      <h1 class="heading-primary">
        <span class="heading-primary--main">Outdoors</span>
        <span class="heading-primary--sub">is where life happens</span>
      </h1>
    </div>



    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 footer-column">
            <ul class="nav flex-column">
              <li class="nav-item">
                <span class="footer-title">Product</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Product 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Product 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Plans & Prices</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Frequently asked questions</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 footer-column">
            <ul class="nav flex-column">
              <li class="nav-item">
                <span class="footer-title">Company</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Job postings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">News and articles</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 footer-column">
            <ul class="nav flex-column">
              <li class="nav-item">
                <span class="footer-title">Contact & Support</span>
              </li>
              <li class="nav-item">
                <span class="nav-link"><i class="fas fa-phone"></i>+47 45 80 80 80</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-comments"></i>Live chat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-star"></i>Give feedback</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>

        <div class="row text-center">
          <div class="col-md-4 box">
            <span class="copyright quick-links">Copyright &copy; Your Website <script>
                document.write(new Date().getFullYear())
              </script>
            </span>
          </div>
          <div class="col-md-4 box">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 box">
            <ul class="list-inline quick-links">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="./js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- <script src="../js/bootstrap.bundle.min.js"></script> -->
    <!-- Main Js -->
    <script src="./js/main.js"></script>
</body>

</html>