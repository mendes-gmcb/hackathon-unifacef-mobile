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
    .form-group.basic .form-control:focus,
    .form-group.basic .custom-select:focus {
        border-bottom-color: #090b68;
        box-shadow: inset 0 -1px 0 0 #130058;
    }

    .lnr-eye {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
    }


    .form-switch .form-check-label:after {
        height: 21px;
        width: 39.2px;
    }


    .form-switch .form-check-input:checked~.form-check-label:before {
        left: 19.6px;
    }

    .form-switch .form-check-label:before {
        width: 16.8px;
        height: 16.8px;
        top: 4px;
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
            <a href="login-cpf-cnpj.php" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section mt-2 text-start">
            <p id="welcome" style="color: #091d83; font-size: 20px">
                <b>Digite a sua senha</b>
            </p>
        </div>
        <div class="section mb-5" style="margin-top: 0">
            <form action="index.php">
                <div class="" style="background-color: transparent">
                    <div class="card-body pb-1" style="background-color: transparent">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <div class="d-flex flex-row-reverse">
                                    <input type="password" class="form-control" id="password" style="font-size: 25px" required />
                                    <ion-icon class="h1 position-absolute" name="eye-off-outline" id="olho"></ion-icon>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Alert Iconed Action Sheet -->
                <div class="modal fade action-sheet" id="actionSheetAlertIconed" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="action-sheet-content">
                                    <div class="iconbox text-primary">
                                        <ion-icon name="finger-print"></ion-icon>
                                    </div>
                                    <div class="text-center p-2">
                                        <h3>Pressione o dedo</h3>
                                        <p>Você entrará na sua conta com o Touch ID na próxima vez.</p>
                                    </div>
                                    <a href="#" class="btn btn-primary btn-lg btn-block" data-bs-dismiss="modal">Concluir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- * Alert Iconed Action Sheet -->

                <div class="form-button-group transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg rounded-pill" disabled>Continuar</button>
                </div>
            </form>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

    <!-- * App Capsule -->
    <script>
        $("#password").on('change', () => {
            $('.btn').removeAttr('disabled');
        });
        var senha = $("#password");

        $("#olho").click(function() {
            if ($("#olho").attr("name") === "eye-outline") {
                $("#olho").attr("name", "eye-off-outline");
                senha.attr("type", "password");
            } else {
                $("#olho").attr("name", "eye-outline");
                senha.attr("type", "text");
            }
        });
    </script>
</body>

</html>