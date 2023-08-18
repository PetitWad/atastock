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
                <ion-icon name="people-circle-outline"></ion-icon>
                </span>Identification
            </h5>
        </header>
<!-- ======================= Content ================== -->
            <div class="container p-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="">create a new user</h3>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex align-items-center justify-content-center p-4">
                            <div class="col-4 p-4"><img style="width: 75%;" src="assets/images/enregistrement.png" alt="">
                            </div>
                            <div class="col-8">
                                <form class="m-4">
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control" id="nom"
                                            placeholder="Type your last name">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="text" class="form-control" id="prenom"
                                            placeholder="Type your first name" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Type your email adress">
                                    </div>
                                    <div class="form-group mb-2">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Type your password" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <select class="form-control" id="role" required>
                                            <option value="">Sélectionner un rôle</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">Utilisateur</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
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
                        <h3>List of recordings</h3>
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
                                            <th>Id</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>State</th>
                                            <th>Actions </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>03</td>
                                            <td>Petit</td>
                                            <td>Wad</td>
                                            <td>Admin</td>
                                            <td>petitwad@ph.family</td>
                                            <td style="cursor: pointer;" class="bg-info text-center text-light">Actif
                                            </td>
                                            <td>&nbsp;&nbsp;
                                                <a href="setting.php"><i class="bi bi-eye-fill text-primary"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-trash3-fill text-danger"
                                                        data-bs-toggle="modal" data-bs-target="#modalDel"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>02</td>
                                            <td>Jean</td>
                                            <td>Christopher</td>
                                            <td>simple usr</td>
                                            <td>christopher@jc</td>
                                            <td style="cursor: pointer;" class="bg-secondary text-center text-light ">
                                                Inactif
                                            </td>
                                            <td>&nbsp;&nbsp;
                                                <a href="setting.php"><i class="bi bi-eye-fill text-primary"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-trash3-fill text-danger"
                                                        data-bs-toggle="modal" data-bs-target="#modalDel"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>06</td>
                                            <td>Widjyna</td>
                                            <td>Louis</td>
                                            <td>simple usr</td>
                                            <td>louidwid@jc</td>
                                            <td style="cursor: pointer;" class="bg-info text-center text-light ">Actif
                                            </td>
                                            <td>&nbsp;&nbsp;
                                                <a href="setting.php"><i class="bi bi-eye-fill text-primary"></i></a>
                                                &nbsp;&nbsp;
                                                <a href="#"><i class="bi bi-trash3-fill text-danger"
                                                        data-bs-toggle="modal" data-bs-target="#modalDel"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                                delete this user?
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