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
                <ion-icon name="settings-outline"></ion-icon>
                </span>Setting
            </h5>
        </header>
        <!-- ======================= Content ================== -->


            <div class="container mt-4">
                <div class="row justify-content-around">

                    <div class=" col-lg-2 pt-4 shadow alert-light justify-content-center setting">
                        <h5>Setting</h5>
                        <hr>
                        <ul>
                            <li><a href="" data-bs-toggle="modal" data-bs-target="#modalUpdate">
                            <i class="bi bi-pencil-square"></i>&nbsp; Update </a></li>

                            <li><a href="" data-bs-toggle="modal" data-bs-target="#modalLock"><i
                                        class="bi bi-person-lock text-primary"></i>&nbsp; Disable </a></li>

                            <li> <a href="" title="delete user" data-bs-toggle="modal" data-bs-target="#modalDel">
                                    <i class="bi bi-person-fill-x text-danger"></i>&nbsp;Delete
                                </a></li>

                            <li><a href="" title="delete user" data-bs-toggle="modal" data-bs-target="#modalChangPwd"><i
                                        class="bi bi-key-fill"></i>&nbsp;Password</a></li>
                        </ul>
                        <div class="d-flex justify-content-center align-items-center">
                            <img class="w-75" src="assets/images/setting_user.png" alt="">
                        </div>
                    </div>

                    <div class=" col-lg-3 d-flex flex-column justify-content-center align-items-center p-4 shadow
                    alert-light">
                        <h5>Profil details</h5>
                        <hr>
                        <img class="rounded-circle w-50 m-4" src="assets/images/man.png" alt="">
                        <h6 class="text-center font-weight-medium">PETIT-HOMME Wadly</h6>
                        <p class="text-info">Dévelppeur</p>
                    </div>
                    <div class=" col-lg-5 d-flex flex-column shadow  alert-light">
                        <h5 class="pt-4 bg-">Info Personnel &nbsp; <a href="" data-bs-toggle="modal"
                                data-bs-target="#modalUpdate"><i class="bi bi-pencil-square text-primary"></i></a>
                        </h5>
                        <table class="m-4">
                            <tr class="mt-4">
                                <th>Nom</th>
                                <td class="text-right">Mowad</td>
                            </tr>
                            <tr class="mt-4">
                                <th>Date de N</th>
                                <td class="text-right">02-02-1996</td>
                            </tr>
                            <tr class="mt-4">
                                <th>Telphone</th>
                                <td class="text-right">+509 4659-7633</td>
                            </tr>
                            <tr class="mt-4">
                                <th>Adresse</th>
                                <td class="text-right">Sainte claire, Delmas 33</td>
                            </tr>
                            <hr>
                            <tr class="mt-4">
                                <th>Email</th>
                                <td class="text-right">petitwad@gmail.com</td>
                            </tr>
                            <tr class="mt-4">
                                <th>Username</th>
                                <td class="text-right">Petitwad</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal de modification -->
            <div class="modal fade" id="modalUpdate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title fs-5 text-center" id="staticBackdropLabel">Update your Profil
                            </h3>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Firstname : Petit">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Lastename : Wad">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="date of birth : 02/05/2023">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Tel: 509 4657-7633">
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control"
                                        placeholder="Adresse : #5, Imp Legal, Delmas 33">
                                </div>
                                <button class="btn btn-primary">Update</button>
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
            <!-- modal de lock -->
            <div class="modal fade" id="modalLock" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="text-center text-danger" id="staticBackdropLabel">⚠️⚠️⚠️<br> Are you sure to
                                Lock this account 🔒
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
        <div class="modal fade" id="modalChangPwd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="">
                            <h3 class="text-center mb-4">Change password</h3>
                            <div class="mb-2">
                                <input type="text" class="form-control" placeholder="Old password">
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control" placeholder="New password">
                            </div>
                            <div class="mb-2">
                                <input type="text" class="form-control" placeholder="Repeat password">
                            </div>
                            <button class="btn btn-primary">Change</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
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