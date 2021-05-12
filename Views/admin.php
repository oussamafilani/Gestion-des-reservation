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
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Boking Hotel</a>
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
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <!-- <li class="nav-item">
            <button type="button" id="" class="btn  btn-primary">login</button>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- start admin  -->
  <div class="container">

    <div class="row">
      <div class="col-md-12 mt-5">
        <h1 class="text-center">Admin Page</h1>
        <hr style="height: 1px;color: black;background-color: black;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Prénom du client</th>
              <th>Nom du client</th>
              <th>Date de Reservation</th>
              <th>Date de Arrivée</th>
              <th>Date de Départ</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php

            include '../Controllers/reservation.php';


            $i = 1;
            if (!empty($rows)) {
              foreach ($rows as $row) {
            ?>

                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $row['prenom_client']; ?></td>
                  <td><?php echo $row['nom_client']; ?></td>
                  <td><?php echo $row['date_reservation']; ?></td>
                  <td><?php echo $row['debut_sejour']; ?></td>
                  <td><?php echo $row['fin_sejour']; ?></td>
                  <td>
                    <a href="view.php?id=<?php echo $row['id_reservation']; ?>" class="btn btn-info btn-sm">View</a>
                    <a href="delete.php?id=<?php echo $row['id_reservation']; ?>" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>

            <?php
              }
            } else {
              echo "no data";
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Small modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus suscipit, voluptas maiores temporibus nesciunt, unde illum inventore adipisci exercitationem beatae ab cumque illo, commodi eos animi sed quod! Perspiciatis, ducimus!
        </p>
      </div>
    </div>
  </div> -->

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