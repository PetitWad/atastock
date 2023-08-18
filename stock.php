<!DOCTYPE html>
<html lang="en">

<head>
    <!-- /favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- --------------------------------------- bootstrap icons------------------------------------------- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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
                <ion-icon name="server-outline"></ion-icon>
                </span>Stock
            </h5>
        </header>
        <!-- ======================= Content ================== -->
            <div class="container p-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Add a new item to stock</h4>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-lg-10">
                                <form class="p-4">
                                    <div class=" form-group mb-2">
                                        <input type="text" class="form-control" id="articleName"
                                            placeholder="Type name of article" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="number" class="form-control" id="quantity"
                                            placeholder="Enter the Quantity">
                                    </div>
                                    <div class="form-group mb-2">
                                        <select class="form-control" id="category" required>
                                            <option value="">Sélectionner une catégorie</option>
                                            <option value="Routeur">Routeur</option>
                                            <option value="Switch">Switch</option>
                                            <option value="Desktop">Desktop</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <textarea class="form-control" id="description" rows="3" required
                                            placeholder="Leave a fairly clear description"></textarea>
                                    </div>
                                    <div class="custom-file mb-2">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload article image</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">Ajouter au stock</button>
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
                        <h4>Items of stock</h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <form class="form-inline">
                                    <input style="padding-left: 30px;" class="form-control mr-sm-2 mb-2" type="search" placeholder="Search">
                                    <ion-icon style=" font-size: 20px; position: absolute; bottom: 260px; color: darkblue; padding-left: 3px;" name="search-outline"></ion-icon>
                                </form>
                                <table class="table table-sm table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name of item</th>
                                            <th>In stock</th>
                                            <th>Categorie</th>
                                            <th>State</th>
                                            <th>Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ATA-001-DESK</td>
                                            <td>Desktop</td>
                                            <td>18</td>
                                            <td>HP Desktop 2022</td>
                                            <td class=" progress-bar progress-bar-striped bg-success" role="progressbar"
                                                style="width: 100%; height: 35px;" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </td>
                                            <td>&nbsp;&nbsp;
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modalView"><i class="bi bi-eye-fill text-primary" ></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-pencil-square text-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-trash3-fill text-danger" data-bs-toggle="modal" data-bs-target="#modalDel"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ATA-001-ROUTER</td>
                                            <td>Router</td>
                                            <td>37</td>
                                            <td>Routeur cisco</td>
                                            <td class=" progress-bar progress-bar-striped bg-warning" role="progressbar"
                                                style="width: 50%; height: 35px;" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </td>
                                            <td>&nbsp;&nbsp;
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modalView"><i class="bi bi-eye-fill text-primary"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-pencil-square text-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-trash3-fill text-danger" data-bs-toggle="modal" data-bs-target="#modalDel"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ATA-001-IMPR</td>
                                            <td>Desktop</td>
                                            <td>3</td>
                                            <td>HP Imprimante</td>
                                            <td class=" progress-bar progress-bar-striped bg-danger" role="progressbar"
                                                style="width: 25%; height: 35px;" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </td>
                                            <td>&nbsp;&nbsp;
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modalView"><i class="bi bi-eye-fill text-primary"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-pencil-square text-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-trash3-fill text-danger" data-bs-toggle="modal" data-bs-target="#modalDel"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ATA-001-CAMR</td>
                                            <td>Caméras</td>
                                            <td>18</td>
                                            <td>Caméras de surveillance IP</td>
                                            <td class="progress-bar progress-bar-striped bg-warning" role="progressbar"
                                                style="width: 50%; height: 35px;" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </td>
                                            <td>&nbsp;&nbsp;
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modalView"><i class="bi bi-eye-fill text-primary"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-pencil-square text-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-trash3-fill text-danger" data-bs-toggle="modal" data-bs-target="#modalDel"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>ATA-001-SERV</td>
                                            <td>Srveur</td>
                                            <td>38</td>
                                            <td>Serveurs de Virtualisation </td>
                                            <td class=" progress-bar progress-bar-striped bg-success" role="progressbar"
                                                style="width: 75%; height: 35px;" aria-valuenow="100" aria-valuemin="0"
                                                aria-valuemax="100">
                                            </td>
                                            <td>&nbsp;&nbsp;
                                                <a href="" data-bs-toggle="modal" data-bs-target="#modalView"><i class="bi bi-eye-fill text-primary"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-pencil-square text-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-trash3-fill text-danger" data-bs-toggle="modal" data-bs-target="#modalDel"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
        <!-- modal de vue un element -->
        <div class="modal fade" id="modalView" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                     <div class="row">
                        <div class="col-lg-4">
                            <img class="w-100" src="assets/images/computer.png" alt="">
                        </div>
                        <div class="col-lg-8">
                            <h4>ATA-001-DESK</h4>
                            <p>	HP Desktop 2022</p>
                            <p><strong>InitialStock  18</strong></p>
                            <p><strong>In Stock 8</strong></p>
                        </div>
                     </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal de modification -->
        <div class="modal fade" id="modalUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
           aria-labelledby="staticBackdropLabel" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h3 class="modal-title fs-5 text-center" id="staticBackdropLabel">Update the item
                       </h3>
                   </div>
                   <div class="modal-body">
                        <form>
                            <div class=" form-group mb-2">
                                <input type="text" class="form-control" id="articleName"
                                    placeholder="Type name of article">
                            </div>
                            <div class="form-group mb-2">
                                <input type="number" class="form-control" id="quantity"
                                    placeholder="Enter the Quantity">
                            </div>
                            <div class="form-group mb-2">
                                <select class="form-control" id="category">
                                    <option value="">Sélectionner une catégorie</option>
                                    <option value="Routeur">Routeur</option>
                                    <option value="Switch">Switch</option>
                                    <option value="Desktop">Desktop</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <textarea class="form-control" id="description" rows="3" 
                                    placeholder="Leave a fairly clear description"></textarea>
                            </div>
                            <div class="custom-file mb-2">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Upload article image</label>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Update item</button>
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
                            delete it?
                        </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
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