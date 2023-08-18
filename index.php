<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name=" viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <!-- /favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- --------------------------------------- bootstrap icons------------------------------------------- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="assets/images/atalou.png" style="width: 185px;" alt="logo">
                                    </div>

                                    <form>
                                        <p>Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example11" class="form-control"
                                                placeholder="Type your email address" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control"
                                                placeholder="Type your password" />
                                        </div>

                                        <div class="pt-1 mb-5 pb-1">
                                            <a href="home.php" class="btn" type="button">LOGIN</a>
                                            <!-- password forget -->
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4 text-center px-4">WE BUILD, WE MANAGE, WE SUPPORT</h4>
                                    <img class=" w-100 " src="assets/images/warehouse.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</body>

</html>

<style>

    .gradient-custom-2 {
        background: #fccb90;
        background-color: #0100A4;
    }

    .btn {
        background-color: #0100A4;
        color: white;
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    }

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
</style>