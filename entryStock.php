<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ======= Lien boostrap ====== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- ======= Lien boostrap icon ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                <ion-icon name="arrow-redo-outline"></ion-icon>
                </span>Entry Stock
            </h5>
        </header>
        <!-- ======================= Content ================== -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-5  p-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Item return form</h4>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" placeholder="ID of item">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" placeholder="Quantity of item">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" placeholder="Initial state">
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" placeholder="Final state">
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control"
                                            placeholder="Entry date of the article ">
                                    </div>
                                    <button class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- table of items -->
                    <div class="col-lg-7 mt-4">
                        <div class="card">
                            <div class="card-header"> </div>
                            <div class="card-body">
                                <form class="form-inline">
                                    <input style="padding-left: 30px;" class="form-control mr-sm-2 mb-2" type="search" placeholder="Search">
                                    <ion-icon style=" font-size: 20px; position: absolute; bottom: 180px; color: darkblue; padding-left: 3px;" name="search-outline"></ion-icon>
                                </form>
                                <table class="table table-sm table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Quantity</th>
                                            <th>State initil</th>
                                            <th>State final</th>
                                            <th>Date of entry</th>
                                            <th>Actions </th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td>06</td>
                                        <td>4</td>
                                        <td>......</td>
                                        <td>s.....</td>
                                        <td>04-oct-22</td>
                                        <td>&nbsp;&nbsp;
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modalUpdate"><i class="bi bi-pencil-square text-warning"></i></a>
                                            &nbsp;&nbsp;
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalDel"><i class="bi bi-trash3-fill text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>4</td>
                                        <td>......</td>
                                        <td>s.....</td>
                                        <td>04-oct-22</td>
                                        <td>&nbsp;&nbsp;
                                             <a href="#" data-bs-toggle="modal" data-bs-target="#modalUpdate"><i class="bi bi-pencil-square text-warning"></i></a>
                                            &nbsp;&nbsp;
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalDel"><i class="bi bi-trash3-fill text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>4</td>
                                        <td>......</td>
                                        <td>s.....</td>
                                        <td>04-oct-22</td>
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
            </div>
                         <!-- Modal de modification -->
                         <div class="modal fade" id="modalUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title fs-5 text-center" id="staticBackdropLabel">Update entry stock
                            </h3>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="ID of item">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="Quantity of item">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Initial state">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Final state">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control"
                                        placeholder="Entry date of the article ">
                                </div>
                                <button class="btn btn-primary">Update</button>
                            </form>
                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                <i class="bi bi-x"></i>
                            </button>
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
        </div> 
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>