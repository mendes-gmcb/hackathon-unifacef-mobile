<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-walletle=1, minimum-walletle=1, maximum-walletle=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="theme-color" content="#000000" />
    <title>SCA Automate </title>
    <meta name="description" content="Finapp HTML Mobile Template" />
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet" />
</head>

<style>
    .lnr-eye {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
    }

    .steps ul li {
        width: 24px;
        height: 24px;
        color: #ededf5;
        font-size: 12px;
        border: 2px solid #ededf5;
        z-index: 2;
        background-color: #d3d3d3;
        border-radius: 100%;
        line-height: 20px;
    }

    ion-icon {
        font-size: 15px;
        margin-top: 1.5px;
        margin-left: 0.9px;
    }
    .form-control, #email1
    {
        background-color: #e5e5e5; 
        border-radius: 8px; 
        font-size: 88%;
        border-bottom: none;
        box-shadow: none;
    }
</style>

<body>
    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon" />
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="onboarding-juridica-first.php" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section text-start">
            <h2>Qual é o seu e-mail?</h2>
        </div>
        <div class="section">

            <form action="onboarding-juridica-password.php">
                <div class="">

                    <div class="card-body pb-1" style="margin-left: 0">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">E-mail</label>
                                <input type="email" class="form-control ps-1" id="email1" placeholder="Digite o seu e-mail" required>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-button-group  transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg rounded-pill">Continuar</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>

    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

    <!-- * App Capsule -->
</body>

</html>