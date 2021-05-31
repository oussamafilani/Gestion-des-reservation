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

    <!-- CSS Style -->
    <link rel="stylesheet" href="./css/reservation.css" />

    <!-- CSS Footer -->
    <link href="css/footer.css" rel="stylesheet" />

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
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
                    </li>

                    <a href="../Controllers/logout.php" class="nav mr-2">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">log Out</button>
                    </a>

                </ul>
            </div>
        </div>
    </nav>

    <!--Card-->
    <div class="card-container">
        <div class="card shadow mb-5 bg-white rounded">
            <!--Card-Body-->
            <div class="card-body">
                <!--Card-Title-->
                <p class="card-title text-center shadow mb-5 rounded">Reservation des biens en ligne</p>

                <?php
                include '../Controllers/reservation.php';
                ?>

                <!--First Row-->
                <form method="post" action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="date-lb mb-1"> Date de Arrivée</label>
                            <input type="date" value="" name="date_d" class="form-control mb-4">
                        </div>

                        <div class="col-sm-6">
                            <label class="date-lb mb-1"> Date de Départ</label>
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
                            <label class="mb-4 mt-4">Ajouter appartement</label>
                            <div>
                                <i class="fas fa-minus-circle dell-appr"></i>
                                <span class="ml-3 mr-3 apparts-count"></span>
                                <i class="fas fa-plus-circle mb-4 add-appr"></i>
                                <!-- <img src="./assets/icons/remove.svg" alt="" class="ico del--ico" /> -->
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="mb-4 mt-4">Ajouter chambre</label>
                            <div>
                                <i class="fas fa-minus-circle dell-chambre"></i>
                                <span class="ml-3 mr-3 chambre-count"></span>
                                <i class="fas fa-plus-circle mb-4 add-chambre"></i>
                                <!-- <img src="./assets/icons/remove.svg" alt="" class="ico del--ico" /> -->
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="mb-4 mt-4">Ajouter bangalow</label>
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


                    <div class="add-bien"></div>

                    <!--Fifth Row-->
                    <div class="row">
                        <div class="child  mb-4 col-sm-12">
                            <input placeholder="Number of child" type="number" min="0" max="6" id="nbchild" class="col-sm-6 form-control" />
                        </div>
                    </div>

                    <div class="children">

                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" id="reserve" name="reserver" class="btn btn-secondary  mt-5">Reserver</button>
                    </div>
                </form>
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

</body>

</html>