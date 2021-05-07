<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />

  <!-- CSS Style -->
  <link rel="stylesheet" href="../css/" />

  <title>Hello, world!</title>
</head>

<body>

  <!-- start admin  -->

  <!-- start record  -->
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
            $reservation = new Reservation();
            $rows = $reservation->fetchReservation();

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


  <!-- jQuery -->
  <script src="../js/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- Main Js -->
  <script src="../js/main.js"></script>
</body>

</html>