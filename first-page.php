<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-walletle=1, minimum-walletle=1, maximum-walletle=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>APP</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
    <style>
        #bodyFirst{
            background: url(assets/img/firstPage/5.png);
            background-size: cover; 
            height: 100vh;
        }
        .acoes {
            display: flex;
            position: absolute;
            margin: auto;
            bottom: 50px;
            flex-direction: column;
            right: 0;
            left: 0;
        }

        first-page.php

        .btn{
            font-size: 18px;
        }
    </style>
</head>

<body id="bodyFirst">

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Capsule -->
    <div id="homePage">
        <div class="logo pt-5 mx-4">
            <!-- <img src="assets/img/logo.png" height="40"> -->
        </div>
        <div class="acoes text-center mx-4">
            <div class="text-start">
                <h1 class="text-white" style="color: #c9e6ff;">
                    Feito por <br> investidores,<br> para investidores
                </h1>
            </div>


            <a href="onboarding-juridica-first.php" class="btn mb-3 p-3 rounded-pill" style="background: #6388cb !important;border-color: #182d52 !important;color: #182d52 !important;">Começar</a>

            
            <a  href="login-cpf-cnpj.php" class="btn text-white">Já tem conta? Clique aqui<ion-icon name="chevron-forward-outline"></ion-icon></a>
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
    <!-- Apex Charts -->
    <script src="assets/js/plugins/apexcharts/apexcharts.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
</body>

</html>