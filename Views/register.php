<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function FillFields(str) {
            swal({
                title: "invalid " + str,
                text: "please fill all fields correctly",
                icon: "error",
            });
        }

        function EmailCheck() {
            swal({
                title: "email already exists in the system ",
                // text: "l'email ou le mot de passe n'est pas correct",
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

            // include '../model/model.php';
            // $model = new Model();
            // $insert = $model->insert();

            include '../Controllers/register.php';

            ?>
            <form class="w-75" action="" method="post">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" id="" placeholder="First Name" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="" placeholder="Last Name" />
                    </div>
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="user" id="" placeholder="Email" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" id="" placeholder="Password" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                    <!-- pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" -->
                </div>

                <!-- <div class="row">
          <div class="col-md-6">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
              <label class="form-check-label" for="flexCheckDefault">
                Keep me logged in
              </label>
            </div>
          </div>
        </div> -->
                <button type="submit" name="register" class="btn btn-custom btn-lg btn-block mt-3">
                    register Now
                </button>
            </form>
        </div>
    </div>
</body>

</html>