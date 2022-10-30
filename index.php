<!doctype html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-walletle=1, minimum-walletle=1, maximum-walletle=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>SCA Automate </title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords"
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <!-- <img src="assets/img/logo.png" alt="logo" class="logo"> -->
        </div>
        <div class="right">
            <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">⠀</span>
            </a>
        </div>
    </div>
    <!-- * App Header -->


    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- SCA Automate Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="text-center">
                <span class="title"></span>
                </div>
                <div class="">
                    <div class="left">
                        <span class="title">Conta</span>
                        <!-- <h1 class="total">R$ ***** </h1> -->
                    </div>
                    <!-- <div class="right">
                        <a href="area-depositar.php" class="button">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div> -->
                </div>
                <!-- * Balance -->
                <!-- SCA Automate Footer -->
                <div class="wallet-footer">
                    <div class="item">
                        <a href="area-cobranca.php">
                            <div class="icon-wrapper bg-warning">
                                <!-- <ion-icon name="card-outline"></ion-icon> -->
                                <ion-icon name="cash-outline"></ion-icon>
                            </div>
                            <strong>Fluxo de Caixa</strong>
                        </a>
                    </div>

                </div>
                <!-- * SCA Automate Footer -->
            </div>
        </div>
        <!-- SCA Automate Card -->

        <!-- Deposit Action Sheet -->
        <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Balance</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account1">From</label>
                                        <select class="form-control custom-select" id="account1">
                                            <option value="0">Savings (*** 5019)</option>
                                            <option value="1">Investment (*** 6212)</option>
                                            <option value="2">Mortgage (*** 5021)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addona1">$</span>
                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                            value="100">
                                    </div>
                                </div>


                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-bs-dismiss="modal">Deposit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Deposit Action Sheet -->

        <!-- Withdraw Action Sheet -->
        <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Withdraw Money</h5>
                    </div>
                    <div class="modal-body">
                        <div class="action-sheet-content">
                            <form>
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="account2d">From</label>
                                        <select class="form-control custom-select" id="account2d">
                                            <option value="0">Savings (*** 5019)</option>
                                            <option value="1">Investment (*** 6212)</option>
                                            <option value="2">Mortgage (*** 5021)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="text11d">To</label>
                                        <input type="email" class="form-control" id="text11d" placeholder="Enter IBAN">
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <label class="label">Enter Amount</label>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addonb1">$</span>
                                        <input type="text" class="form-control" placeholder="Enter an amount"
                                            value="100">
                                    </div>
                                </div>

                                <div class="form-group basic">
                                    <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-bs-dismiss="modal">Withdraw</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Withdraw Action Sheet -->
        <!-- * Transactions -->

                    </ul>
                </div>
            </div>
        </div> 
        <!-- * Monthly Bills -->


        <!-- Saving Goals -->
        <!-- <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">Saving Goals</h2>
                <a href="app-savings.html" class="link">View All</a>
            </div>
            <div class="goals">
                <div class="item">
                    <div class="in">
                        <div>
                            <h4>Gaming Console</h4>
                            <p>Gaming</p>
                        </div>
                        <div class="price">$ 499</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <div class="item">
                    <div class="in">
                        <div>
                            <h4>New House</h4>
                            <p>Living</p>
                        </div>
                        <div class="price">$ 100,000</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100">55%</div>
                    </div>
                </div>
                <div class="item">
                    <div class="in">
                        <div>
                            <h4>Sport Car</h4>
                            <p>Lifestyle</p>
                        </div>
                        <div class="price">$ 42,500</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15"
                            aria-valuemin="0" aria-valuemax="100">15%</div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- * Saving Goals -->


        <!-- News -->
        <!-- <div class="section full mt-4 mb-3">
            <div class="section-heading padding">
                <h2 class="title">Últimas Noticías</h2>
            </div>
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <a href="app-blog-post.html">
                                <div class="blog-card">
                                    <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title">What will be the value of bitcoin in the next...</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="splide__slide">
                            <a href="app-blog-post.html">
                                <div class="blog-card">
                                    <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title">Rules you need to know in business</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="splide__slide">
                            <a href="app-blog-post.html">
                                <div class="blog-card">
                                    <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title">10 easy ways to save your money</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <li class="splide__slide">
                            <a href="app-blog-post.html">
                                <div class="blog-card">
                                    <img src="assets/img/sample/photo/4.jpg" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title">Follow the financial agenda with...</h4>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div> -->
        <!-- * News -->


        <!-- app footer -->
        <!-- <div class="appFooter">
            <div class="footer-title">
                Copyright © IB System 2022. Todos os Direitos Reservados.
            </div>
            O banco feito por investidores para investidores.
        </div> -->
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


  <?php include "bottom-menu.php" ?>

<?php include "side-bar.php"?>



    <!-- iOS Add to Home Action Sheet -->
    <div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add to Home Screen</h5>
                    <a href="#" class="close-button" data-bs-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content text-center">
                        <div class="mb-1"><img src="assets/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                        </div>
                        <div>
                            Install <strong>Finapp</strong> on your iPhone's home screen.
                        </div>
                        <div>
                            Tap <ion-icon name="share-outline"></ion-icon> and Add to homescreen.
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- * iOS Add to Home Action Sheet -->


    <!-- Android Add to Home Action Sheet -->
    <div class="modal inset fade action-sheet android-add-to-home" id="android-add-to-home-screen" tabindex="-1"
        role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add to Home Screen</h5>
                    <a href="#" class="close-button" data-bs-dismiss="modal">
                        <ion-icon name="close"></ion-icon>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content text-center">
                        <div class="mb-1">
                            <img src="assets/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                        </div>
                        <div>
                            Install <strong>Finapp</strong> on your Android's home screen.
                        </div>
                        <div>
                            Tap <ion-icon name="ellipsis-vertical"></ion-icon> and Add to homescreen.
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Android Add to Home Action Sheet -->



    <div id="cookiesbox" class="offcanvas offcanvas-bottom cookies-box" tabindex="-1" data-bs-scroll="true"
        data-bs-backdrop="false">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">We use cookies</h5>
        </div>
        <div class="offcanvas-body">
            <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non lacinia quam. Nulla facilisi.
                <a href="#" class="text-secondary"><u>Learn more</u></a>
            </div>
            <div class="buttons">
                <a href="#" class="btn btn-primary btn-block" data-bs-dismiss="offcanvas">I understand</a>
            </div>
        </div>
    </div>

    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>

    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
    </script>

</body>

</html>