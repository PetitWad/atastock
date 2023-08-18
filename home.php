<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | ATASTOCK</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ======= Lien boostrap ====== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ======= Lien boostrap icon ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- --------------------------------------- bootstrap js------------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="__container">
        <?php require_once('nav.php')  ?>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <?php require_once('topbar.php')  ?>

            <!-- ======================= Header of each page  ================== -->
            <header class="page-header shadow p-2 mb-4 mt-4">
                <h5> 
                    <span class="page-icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>Welcome to the administrator panel
            </h5>
            </header>
            
            <!-- ======================= content  ================== -->
            <div class="content">
                <!-- Animated -->
                <div class="animated fadeIn">
                    <!-- card  -->
                    <div class="row justify-content-around">
                        <div class="col-lg-3 col-md-6 shadow p-2">
                            <div class="row" style="padding-left: 15px;">
                                <div class="col-8 d-flex pl-4 justify-content-center align-items-center">
                                    <img class="p-4 w-75" src="assets/images/stock.png" alt="">
                                    <div class="text-">
                                        <h4 class="fw-300">STOCK</h4>
                                        <span class="text-info"> 23569</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 shadow p-2">
                            <div class="row" style="padding-left: 15px;">
                                <div class=" col-8 d-flex pl-4 justify-content-center align-items-center">
                                    <img class="p-4 w-75" src="assets/images/transfert.png" alt="">
                                    <div class="text-">
                                        <h4 class="fw-300">TRANSFERT</h4>
                                        <span class="text-info"> 6069</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 shadow p-2">
                            <div class="row" style="padding-left: 15px;">
                                <div class=" col-8 d-flex pl-4 justify-content-center align-items-center">
                                    <img class="p-4 w-75" style="width: 80px;" src="assets/images/rapport.png" alt="">
                                    <div class="text-">
                                        <h4 class="fw-300">RAPPORT</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- second card  -->
                    <div class="row justify-content-around mt-2">
                        <div class=" col-lg-3 col-md-6 shadow p-2">
                            <div class="row" style="padding-left: 25px;">
                                <div class="col-8 d-flex pl-4 justify-content-center align-items-center">
                                    <img class="p-4 w-75" src="assets/images/inventory.png" alt="">
                                    <div class="text-">
                                        <h4 class="fw-300">INVENTORY</h4>
                                        <span class="text-info"> 23569</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 shadow p-2">
                            <div class="row" style="padding-left: 15px;">
                                <div class=" col-8 d-flex pl-4 justify-content-center align-items-center">
                                    <img class="p-4 w-75" src="assets/images/bourse.png" alt="">
                                    <div class="text-">
                                        <h4 class="fw-300">STOCK DOWN</h4>
                                        <span class="text-info"> 6069</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 shadow p-2">
                            <div class="row" style="padding-left: 20px;">
                                <div class=" col-8 d-flex pl-4 justify-content-center align-items-center">
                                    <img class="p-4 w-75" style="width: 80px;" src="assets/images/parametre.png" alt="">
                                    <div class="text-">
                                        <h4 class="fw-300">SETTING</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>