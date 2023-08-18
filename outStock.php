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
                <ion-icon name="arrow-undo-outline"></ion-icon>
                </span>Out Stock
            </h5>
        </header>
        <!-- ======================= Content ================== -->
            
            <div class="container mt-2 p-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Formulaire de sortie du stock</h3>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-10">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-2">
                                                <label for="dateDemande">Date de la demande :</label>
                                                <input type="date" class="form-control" id="dateDemande" placeholder=""
                                                    required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="demandeur">Demandeur :</label>
                                                <input type="text" class="form-control" id="demandeur" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="contactClient">Article* :</label>
                                                <input type="text" class="form-control" id="contactClient">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-2">
                                                <label for="destinataire">Destinataire :</label>
                                                <input type="text" class="form-control" id="destinataire" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="departement">Département :</label>
                                                <select class="form-control" id="departement" required>
                                                    <option value="" selected disabled>Choisir un département</option>
                                                    <option value="Ressources humaines">Ressources humaines</option>
                                                    <option value="Marketing">Développement</option>
                                                    <option value="Achats">Software </option>
                                                    <option value="Achats">Bench </option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="articles">Articles Quantité* :</label>
                                                <input type="text" class="form-control" id="articles" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label for="commentaires">Commentaires :</label>
                                                <textarea class="form-control" id="commentaires" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Soumettre</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table of items -->
            <div class="container mt-2 p-4">
                <div class="card">
                    <div class="card-header">
                        <h3>list of item</h3>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <form class="form-inline">
                                    <input style="padding-left: 30px;" class="form-control mr-sm-2 mb-2" type="search" placeholder="Search">
                                    <ion-icon style=" font-size: 20px; position: absolute; bottom: 180px; color: darkblue; padding-left: 3px;" name="search-outline"></ion-icon>
                                </form>
                                <table class="table table-sm table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Appr</th>
                                            <th>N<sup>o</sup></th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Date</th>
                                            <th>department</th>
                                            <th>Applicant</th>
                                            <th>Recipient</th>
                                            <th>Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>&nbsp;&nbsp;
                                                <i class="bi bi-check-all text-success" style="cursor: unset;">
                                            </td>
                                            <td>01</td>
                                            <td>Desktop</td>
                                            <td>3</td>
                                            <td>03 Juil 23 </td>
                                            <td>Dev</td>
                                            <td>Petit-Wad</td>
                                            <td>Salle Dev Atalou</td>
                                            <td>&nbsp;&nbsp;
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalUpdate"><i class="bi bi-pencil-square text-warning"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDel"><i class="bi bi-trash3-fill text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;&nbsp;
                                                <i class="bi bi-exclamation-circle text-warning pointer"
                                                    data-toggle="modal" data-target="#modalAppr"
                                                    style="cursor: pointer;">
                                            </td>
                                            <td>02</td>
                                            <td>Imprimante</td>
                                            <td>5</td>
                                            <td>06 Jun 23 </td>
                                            <td>Ressources H.</td>
                                            <td>Petit-Wad</td>
                                            <td>Ressources H.</td>
                                            <td>&nbsp;&nbsp;
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalUpdate"><i class="bi bi-pencil-square text-warning"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDel"><i class="bi bi-trash3-fill text-danger"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;&nbsp;
                                                <i class="bi bi-x-circle text-danger pointer">
                                            </td>
                                            <td>03</td>
                                            <td>Router</td>
                                            <td>7</td>
                                            <td>02 Jun 23 </td>
                                            <td>Bench</td>
                                            <td>Petit-Wad</td>
                                            <td>Ressources H.</td>
                                            <td>&nbsp;&nbsp;
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalUpdate"><i class="bi bi-pencil-square text-warning"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalDel"><i class="bi bi-trash3-fill text-danger"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!--  Fin tableau -->

             <!-- Modal de modification -->
            <div class="modal fade" id="modalUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title fs-5 text-center" id="staticBackdropLabel">Update out to stock
                            </h3>
                        </div>
                        <div class="modal-body">
                        <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-2">
                                                <label for="dateDemande">Date de la demande :</label>
                                                <input type="date" class="form-control" id="dateDemande" placeholder=""
                                                    required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="demandeur">Demandeur :</label>
                                                <input type="text" class="form-control" id="demandeur" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="contactClient">Article* :</label>
                                                <input type="text" class="form-control" id="contactClient">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-2">
                                                <label for="destinataire">Destinataire :</label>
                                                <input type="text" class="form-control" id="destinataire" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="departement">Département :</label>
                                                <select class="form-control" id="departement" required>
                                                    <option value="" selected disabled>Choisir un département</option>
                                                    <option value="Ressources humaines">Ressources humaines</option>
                                                    <option value="Marketing">Développement</option>
                                                    <option value="Achats">Software </option>
                                                    <option value="Achats">Bench </option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="articles">Articles Quantité* :</label>
                                                <input type="text" class="form-control" id="articles" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label for="commentaires">Commentaires :</label>
                                                <textarea class="form-control" id="commentaires" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                    class="bi bi-x"></i></button>
                        </div>
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
                                delete this?
                            </h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modalAppr">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Approuver par ADM du systeme</h4>

                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>J'espere que vous faites le bon choix!!!</p>
                            <button class=" btn btn-success">Approuver</button>
                            <button class="btn btn-danger">Refuser</button>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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