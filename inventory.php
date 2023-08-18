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
        <header class="page-header shadow p-2 mt-4">
            <h5> 
                <span class="page-icon">
                <ion-icon name="bulb-outline"></ion-icon>
                </span>Inventory
            </h5>
        </header>
        <!-- ======================= Content ================== -->

            <div class="container mt-4">

                <div class="card m-4">
                    <div class="card-header">
                        <h3>ATASTOCK</h3>
                    </div>
                    <div class="card-body m-4">
                        <div class="row justify-content-between">
                            <div class="col-lg-7">
                                <div class="row d-flex justify-content-center align-items-center shadow alert-light">
                                    <div class="col-lg-10 m-2">
                                        <h2 class="alert-info text-center p-2">Formulaire d'Inventaire</h2>
                                        <form>
                                            <div class="row p-2">
                                                <!-- Première colonne -->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label for="nom_article">Nom de l'article :</label>
                                                        <input type="text" class="form-control" id="nom_article"
                                                            name="nom_article" required>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="numero_serie">Numéro de série :</label>
                                                        <input type="text" class="form-control" id="numero_serie"
                                                            name="numero_serie">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="quantite_disponible">Quantité disponible :</label>
                                                        <input type="number" class="form-control"
                                                            id="quantite_disponible" name="quantite_disponible"
                                                            required>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="emplacement">Emplacement :</label>
                                                        <input type="text" class="form-control" id="emplacement"
                                                            name="emplacement">
                                                    </div>
                                                    <!-- Bouton de soumission -->
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                </div>

                                                <!-- Deuxième colonne -->
                                                <div class="col-md-6">
                                                    <div class="form-group mb-2">
                                                        <label for="fournisseur">Fournisseur :</label>
                                                        <input type="text" class="form-control" id="fournisseur"
                                                            name="fournisseur">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="valeur_totale">Valeur totale :</label>
                                                        <input type="text" class="form-control" id="valeur_totale"
                                                            name="valeur_totale">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="date_maintenance">Date de la dernière maintenance
                                                            :</label>
                                                        <input type="date" class="form-control" id="date_maintenance"
                                                            name="date_maintenance">
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label for="commentaires">Commentaires :</label>
                                                        <textarea class="form-control" id="commentaires"
                                                            name="commentaires" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 scroll-list-inventory">
                                <div class="row">
                                    <div class="col alert-light shadow align-items-center">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-3">
                                                <a href="inventories.php"><img class=" w-50"
                                                        src="assets/images/folder.png" alt=""></a>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>
                                                <h5>Equipement IT</h5>
                                                <i class="bi bi-file-earmark-check mr-4">56</i>
                                                <i class="bi bi-files mr-2">23</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end of inventory item -->
                                <div class="row mt-2">
                                    <div class="col alert-light shadow align-items-center">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-3">
                                                <a href="inventories.php"><img class="w-50" src="assets/images/folder.png"
                                                        alt=""></a>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>
                                                <h5>Equipement IT</h5>
                                                <i class="bi bi-file-earmark-check mr-4">56</i>
                                                <i class="bi bi-files mr-2">23</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end of inventory item -->
                                <div class="row mt-2">
                                    <div class="col alert-light shadow align-items-center">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-3">
                                                <a href="inventories.php"><img class="w-50" src="assets/images/folder.png"
                                                        alt=""></a>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>
                                                <h5>Equipement IT</h5>
                                                <i class="bi bi-file-earmark-check mr-4">56</i>
                                                <i class="bi bi-files mr-2">23</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end of inventory item -->
                                <div class="row mt-2">
                                    <div class="col alert-light shadow align-items-center">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-3">
                                                <a href="inventories.php"><img class="w-50" src="assets/images/folder.png"
                                                        alt=""></a>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>
                                                <h5>Equipement IT</h5>
                                                <i class="bi bi-file-earmark-check mr-4">56</i>
                                                <i class="bi bi-files mr-2">23</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end of inventory item -->
                                <div class="row mt-2">
                                    <div class="col alert-light shadow align-items-center">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-3">
                                                <a href="inventories.php"><img class="w-50" src="assets/images/folder.png"
                                                        alt=""></a>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>
                                                <h5>Equipement IT</h5>
                                                <i class="bi bi-file-earmark-check mr-4">56</i>
                                                <i class="bi bi-files mr-2">23</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end of inventory item -->
                                <div class="row mt-2">
                                    <div class="col alert-light shadow align-items-center">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-lg-3">
                                                <a href="inventories.php"><img class="w-50" src="assets/images/folder.png"
                                                        alt=""></a>
                                            </div>
                                            <div class="col-lg-9">
                                                <p>
                                                <h5>Equipement IT</h5>
                                                <i class="bi bi-file-earmark-check mr-4">56</i>
                                                <i class="bi bi-files mr-2">23</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end of inventory item -->
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