<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS Style -->
    <link rel="stylesheet" href="./css/reservation.css" />

    <title>Reservation </title>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let scriptEl = document.createElement("script");
            scriptEl.setAttribute("src", "./js/reservation.js");
            document.body.appendChild(scriptEl);
        });
    </script>
</head>


<body>
    <!--Card-->
    <div class="card shadow mb-5 bg-white rounded">
        <!--Card-Body-->
        <div class="card-body">
            <!--Card-Title-->
            <p class="card-title text-center shadow mb-5 rounded">Reservation des biens en ligne</p>

            <?php
            include '../Controllers/reservation.php';
            // $reservation = new Reservation();
            // $reservation->insertReservation();

            // if (!empty($_REQUEST['id_bine']) && !empty($_REQUEST['id_pension'])) {

            //     $controllers->insertSinglRoom($_REQUEST['id_bine'], $_REQUEST['id_pension']);
            // }

            ?>

            <!--First Row-->
            <!-- <form method="post" action=""> -->
            <div class="row">
                <div class="col-sm-6">
                    <label class="mb-1" style="font-family:Arial, FontAwesome">&#xf073;&nbsp; Date de Arrivée</label>
                    <input type="date" value="" name="date_d" class="form-control mb-4">
                </div>

                <div class="col-sm-6">
                    <label class="mb-1" style="font-family:Arial, FontAwesome">&#xf073;&nbsp; Date de Départ</label>
                    <input type="date" value="" name="date_f" class="form-control mb-4">
                </div>
                <input type="hidden" id="rooms_number" name="nb_rm" value="">

            </div>

            <!--Second Row-->
            <div class="row">

                <div class="col-4 text-center">

                </div>

            </div>



            <!--Fourth Row-->
            <div class="row">
                <div class="col-md-4 text-center">
                    <button type="button" id="" class="btn btn-outline-primary   mb-4 mt-4">Ajouter apparts</button>
                    <div>
                        <i class="fas fa-minus-circle dell-appr"></i>
                        <span class="ml-3 mr-3 apparts-count"></span>
                        <i class="fas fa-plus-circle mb-4 add-appr"></i>
                        <!-- <img src="./assets/icons/remove.svg" alt="" class="ico del--ico" /> -->
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <button type="button" id="addchambre" class="btn btn-outline-primary mb-4 mt-4">Ajouter chambre</button>
                </div>
                <div class="col-md-4 text-center">
                    <button type="button" id="" class="btn  btn-outline-primary mb-4 mt-4">Ajouter bangalow</button>
                    <div>
                        <i class="fas fa-minus-circle dell-bang"></i>
                        <span class="ml-3 mr-3 bang-count"></span>
                        <i class="fas fa-plus-circle mb-4 add-bang"></i>
                        <!-- <img src="./assets/icons/remove.svg" alt="" class="ico del--ico" /> -->
                    </div>
                </div>
            </div>
            <div class="add-apparts"></div>
            <div class="add-bung"></div>
            <div class="add-bien row "></div>

            <!--Fifth Row-->
            <div class="row">
                <div class="child  mb-4 col-sm-12">
                    <input placeholder="Number of child" type="number" min="0" max="6" id="nbchild" class="col-sm-6 form-control" />
                </div>
            </div>

            <div class="children row">

            </div>

            <div class="col-md-12 text-center">
                <button type="submit" id="reserve" name="reserver" class="btn btn-secondary  mt-5">Reserver</button>
            </div>
            <!-- </form> -->
        </div>
    </div>


    <!-- jQuery -->
    <script src="./js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- Main Js -->

</body>

</html>