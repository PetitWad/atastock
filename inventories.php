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

            <div class="container alert-light shadow p-4">
                <h3 class=" alert alert-secondary text-center">List Of Inventory of date 03-sept-23</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-10">
                        <table class="table table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>N<sup>o</sup></th>
                                    <th>Nom Art</th>
                                    <th>Fournisseur</th>
                                    <th>Qnt Dispo</th>
                                    <th>valeur Total</th>
                                    <th>Emplacement</th>
                                    <th>Date mise a jour</th>
                                    <th>Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Desktop</td>
                                    <td>HP</td>
                                    <td>12</td>
                                    <td>20</td>
                                    <td>Departement Dev</td>
                                    <td>23-Aout-23</td>
                                    </td>
                                    <td>&nbsp;&nbsp;
                                        <a href=""><i class="bi bi-printer-fill text-primary"></i></a>
                                        &nbsp;&nbsp;
                                        <i style="cursor: pointer;" class="bi bi-pencil-square text-warning"
                                            data-bs-toggle="modal" data-bs-target="#modalUpdate"></i>
                                        &nbsp;&nbsp;
                                        <a href="#"><i class="bi bi-trash3-fill text-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalDel"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- modal de supression -->
            <div class="modal fade" id="modalDel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="text-center text-danger" id="staticBackdropLabel">⚠️⚠️⚠️<br> Are you sure to
                                delete the inventory
                            </h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal de modification -->
            <div class="modal fade" id="modalUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title fs-5 text-center" id="staticBackdropLabel">Update Inventory date of
                                03-sept-23
                            </h3>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row p-2">
                                    <!-- Première colonne -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nom_article">Nom de l'article :</label>
                                            <input type="text" class="form-control" id="nom_article" name="nom_article"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="numero_serie">Numéro de série :</label>
                                            <input type="text" class="form-control" id="numero_serie"
                                                name="numero_serie">
                                        </div>
                                        <div class="form-group">
                                            <label for="quantite_disponible">Quantité disponible :</label>
                                            <input type="number" class="form-control" id="quantite_disponible"
                                                name="quantite_disponible" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="emplacement">Emplacement :</label>
                                            <input type="text" class="form-control" id="emplacement" name="emplacement">
                                        </div>
                                        <!-- Bouton de soumission -->
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>

                                    <!-- Deuxième colonne -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fournisseur">Fournisseur :</label>
                                            <input type="text" class="form-control" id="fournisseur" name="fournisseur">
                                        </div>
                                        <div class="form-group">
                                            <label for="valeur_totale">Valeur totale :</label>
                                            <input type="text" class="form-control" id="valeur_totale"
                                                name="valeur_totale">
                                        </div>
                                        <div class="form-group">
                                            <label for="date_maintenance">Date de la dernière maintenance :</label>
                                            <input type="date" class="form-control" id="date_maintenance"
                                                name="date_maintenance">
                                        </div>
                                        <div class="form-group">
                                            <label for="commentaires">Commentaires :</label>
                                            <textarea class="form-control" id="commentaires" name="commentaires"
                                                rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                    class="bi bi-x"></i></button>
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