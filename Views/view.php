<?php
include '../Controllers/admin_role.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />


    <!-- CSS Footer -->
    <link href="css/footer.css" rel="stylesheet" />

    <title>Hello, world!</title>
</head>

<body>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark  py-3" id="mainNav">
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
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
            <button type="button" id="" class="btn  btn-primary">login</button>
          </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">Reservation information</h1>
                <hr style="height: 1px;color: black;background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">

                <?php
                include '../Controllers/reservation.php';

                if (!empty($res_row)) {
                ?>

                    <div class="card">
                        <div class="card-header">
                            Reservation
                        </div>
                        <div class="card-body">
                            <p>id reservation : <?php echo $res_row['id_reservation']; ?></p>
                            <p>name : <?php echo $res_row['nom_client']; ?></p>
                            <p>prenom : <?php echo $res_row['prenom_client']; ?></p>
                            <p>price : <?php echo $total['total'] . " DH"; ?></p>
                        </div>
                    </div>
                <?php
                } else {
                    echo "no data";
                }
                ?>

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once '../includes/footer.include.php'; ?>

    <!-- jQuery -->
    <script src="./js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- Main Js -->
    <script src="./js/main.js"></script>
</body>

</html>