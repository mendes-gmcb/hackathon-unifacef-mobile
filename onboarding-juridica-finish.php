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

    #circle {
        font-size: 6em;
    }

    #success_id {
        color: #27173E
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
        <div class="left"></div>
        <div class="pageTitle"></div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div class="section justify-content-center mt-5">
        <form action="first-page.php">
            <div class="card-body mt-5 pb-1">
                <div class="mt-5 pt-5">
                    <div class="iconbox text-success text-center">
                        <ion-icon name="checkmark-circle" id="circle"></ion-icon>
                    </div>
                    <div class="text-center">
                        <h2>Pronto!</h2>
                        <p id="success_id"> Dados cadastrados com sucesso! Em breve, lhe enviaremos um email. Sua conta está sendo analizada para aprovação. </p>
                    </div>
                </div>
            </div>
            <div class="form-button-group  transparent">
                <button type="submit" class="btn btn-primary btn-block btn-lg rounded-pill">Finalizar</button>
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