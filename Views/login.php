<?php
include '../Controllers/logged_in.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    function ErrPasswrdEmail() {
      swal({
        title: "Password or email incorrect",
        text: "l'email ou le mot de passe n'est pas correct",
        icon: "error",
      });
    }
  </script>

  <title>Login Form</title>
  <style>
    body {
      padding: 0;
      margin: 0;
      height: 100vh;
      font-family: "Nunito Sans";
    }

    .form-control {
      line-height: 2;
    }

    .bg-custom {
      background-color: #ff7300;
    }

    .btn-custom {
      background-color: #3e3d56;
      color: #fff;
    }

    .btn-custom:hover {
      background-color: #33313f;
      color: #fff;
    }

    label {
      color: #fff;
    }

    a,
    a:hover {
      color: #fff;
      text-decoration: none;
    }

    a,
    a:hover {
      text-decoration: none;
    }

    @media (max-width: 932px) {
      .display-none {
        display: none !important;
      }
    }
  </style>
</head>

<body>
  <div class="row m-0 h-100">
    <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
      <img src="./assets/img/login.svg" class="w-100" />
    </div>
    <div class="col p-0 bg-custom d-flex justify-content-center align-items-center flex-column w-100">
      <?php
      include '../Controllers/login.php';
      // Password123@

      ?>
      <form class="w-75" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <div class="mb-3">
          <label for="" class="form-label">Username</label>
          <input type="email" class="form-control" name="user" id="" placeholder="email" />
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Password</label>
          <input type="password" class="form-control" name="pass" id="" placeholder="password" />
        </div>
        <!-- <div class="row">
          <div class="col-md-6">
            <div class="form-check">
              <input class="form-check-inp ut" type="checkbox" value="" id="flexCheckDefault" />
              <label class="form-check-label" for="flexCheckDefault">
                Keep me logged in
              </label>
            </div>
          </div>
        </div> -->
        <button type="submit" name="login" class="btn btn-custom btn-lg btn-block mt-3">
          Login Now
        </button>
      </form>
    </div>
  </div>
</body>

<script>
  function ErrPasswrdEmail() {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
    });
  }
</script>

</html>