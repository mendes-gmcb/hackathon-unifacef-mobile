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
  <link rel="manifest" href="__manifest.json" />
</head>

<style>
  .form-group.basic .form-control:focus,
  .form-group.basic .custom-select:focus {
    border-bottom-color: #090b68;
    box-shadow: inset 0 -1px 0 0 #130058;
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
      <a href="first-page.php" class="headerButton goBack">
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
        <b>Bom te ver de volta!</b>
        <br />
        Digite o seu CNPJ
      </p>
    </div>
    <div class="section mb-5" style="margin-top: 0">
      <form action="login-password.php">
        <div class="" style="background-color: transparent">
          <div class="card-body pb-1" style="background-color: transparent">
            <div class="form-group basic">
              <div class="input-wrapper">
                <input type="tel" class="form-control" id="cpfcnpj" placeholder="000.000.000-00" style="font-size: 25px" required />
                <i class="clear-input">
                  <ion-icon name="close-circle"></ion-icon>
                </i>
              </div>
            </div>
          </div>
        </div>

        <!-- se o codigo nao for o certo ou os campos nao estiverem todos preenchidos  -->

        <div class="form-button-group  transparent">
          <button type="submit" class="btn btn-primary btn-block btn-lg rounded-pill" disabled>Continuar</button>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

  <script>
    $("#cpfcnpj").on('change', () => {
      $('.btn').removeAttr('disabled');
    });
    var options = {
      onKeyPress: function(cpf, ev, el, op) {
        var masks = ["000.000.000-000", "00.000.000/0000-00"];
        $("#cpfcnpj").mask(cpf.length > 14 ? masks[1] : masks[0], op);
      },
    };

    $("#cpfcnpj").length > 11 ?
      $("#cpfcnpj").mask("00.000.000/0000-00", options) :
      $("#cpfcnpj").mask("000.000.000-00#", options);
  </script>
</body>

</html>