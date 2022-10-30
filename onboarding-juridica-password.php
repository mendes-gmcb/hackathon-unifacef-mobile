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

    .cod_email {
        display: flex;
        flex-direction: row;
        -webkit-box-pack: center;
        justify-content: center;
        margin: 1rem 0px;
    }

    .cod_email_input {
        background: transparent;
        font-size: 2rem;
        font-weight: 600;
        width: 42px;
        height: 50px;
        padding-bottom: 8px;
        line-height: 40px;
        text-align: center;
        border-radius: 2px;
        margin: 0px 6px;
        border: 0;
    }

    .form-control {
        padding: 10px;
    }

    .form-control:focus {
        color: #212529;
        background-color: #ededf5;
        border-color: #ededf5;
        outline: 0;
        box-shadow: 0 0 0 0;
    }

    #password_new,
    #password_confirm {
        background-color: #e5e5e5;
        border-radius: 8px;
        font-size: 88%;
        border-bottom: none;
        box-shadow: none;
    }

    #olho_confirm,
    #olho_new {
        padding-top: 7px;
        padding-right: 10px;
    }

    #rules {
        font-size: 13px;
        padding-left: 30px;
        color: #27173eb8;
    }

    .form-group .label {
        color: #504f4f;
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
            <a href="onboarding-juridica-autenticacao-email.php" class="headerButton goBack">
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

        <div class="section text-center">
            <h2>Criar senha</h2>

        </div>
        <div class="section">
            <form action="index.php">
                <div class="">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">Senha</label>
                                <div class="d-flex flex-row-reverse">
                                    <input type="password" class="form-control ps-1" id="password_new" autocomplete="off" placeholder="Digite sua senha" required>
                                    <ion-icon class="h3 position-absolute " name="eye-off-outline" id="olho_new"></ion-icon>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- se o codigo nao for o certo ou os campos nao estiverem todos preenchidos  -->

                <div class="form-button-group  transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg rounded-pill">Continuar</button>
                </div>

                <!-- senao  TRUE -->

                <!-- <div class="form-button-group  transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Continuar</button>
                </div> -->

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
    <script>
        $("#password_confirm").on('change', () => {
            $('.btn').removeAttr('disabled');
        });

        $(".cod_email_input").keyup(function() {
            if (this.value.length == this.maxLength) {
                $(this).next('.cod_email_input').focus();
            }
        });

        var senha = $("#password_new");

        $("#olho_new").click(function() {
            if ($("#olho_new").attr("name") === "eye-outline") {
                $("#olho_new").attr("name", "eye-off-outline");
                senha.attr("type", "password");
            } else {
                $("#olho_new").attr("name", "eye-outline");
                senha.attr("type", "text");
            }
        });

        var senha_nova = $("#password_confirm");



        $("#olho_confirm").click(function() {
            if ($("#olho_confirm").attr("name") === "eye-outline") {
                $("#olho_confirm").attr("name", "eye-off-outline");
                senha_nova.attr("type", "password");
            } else {
                $("#olho_confirm").attr("name", "eye-outline");
                senha_nova.attr("type", "text");
            }
        });
    </script>
</body>

</html>