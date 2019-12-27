<?php
session_start();

isset($_SESSION["tipo"]) ? $tipo = $_SESSION["tipo"] : header('Location: logout.php');
isset($_SESSION["iduser"]) ? $id = $_SESSION["iduser"] : header('Location: logout.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Cadastro de Conta Bancária</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 2-columns  " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

  <?php 
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderHeader.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderMenu.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderFooter.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'Notifications.php');

        $message = new Notifications();
        if (isset($_SESSION['sucess'])) { 
          echo $message->sucess('Sucesso!!','Cadastro realizado com sucesso.');
          unset($_SESSION['sucess']);
        }

        if (isset($_SESSION['usuarioexiste'])) { 
          echo $message->error('Atenção!!','Verifique os dados o email cadastrado ja existe.');
          unset($_SESSION['usuarioexiste']);
        }

        $renderHeader = new RenderHeader();
        echo $renderHeader->renderHeader();

        $renderMenu = new RenderMenu();
        echo $renderMenu->renderMenu($tipo);
    ?>

    <!-- BEGIN: Page Main-->
  <div id="main">
    <div class="col s12">
     <div class="container">
       <div class="seaction">
    <!-- Form with placeholder -->
    <div class="col s12 m6 l6">
      <div id="placeholder" class="card card card-default scrollspy  grey lighten-5">
        <div class="card-content">
          <h4 class="card-title">Cadastro de Conta Bancária</h4>
          <form class="col s12" action="insereBanco.php" method="POST">
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Banco do Brasil" name="nomebanco" id="nomebanco" type="text" required>
                <label for="nomebanco" class="active">Nome Banco</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s3">
                <input placeholder="0000" name="numeroagencia" id="numeroagencia" type="number" required>
                <label for="numeroagencia" class="active">Agência</label>
              </div>

              <div class="input-field col s3">
                <input placeholder="00" name="digitoagencia" id="digitoagencia" type="number">
                <label for="digitoagencia" class="active">Digito Verificador Agência</label>
              </div>

              <div class="input-field col s3">
                <input placeholder="0000" name="numeroconta" id="numeroconta" type="number" required>
                <label for="numeroconta" class="active">Número da Conta</label>
              </div>

              <div class="input-field col s3">
                <input placeholder="00" id="digitoconta" name="digitoconta" type="number">
                <label for="digitoconta" class="active">Digito Verificador Conta</label>
              </div>
            </div>
            <div class="row">
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Salvar
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
  </div>
    </div>
      </div>
    </div>

    <!-- BEGIN: Footer-->
    <?php
        $renderFooter = new RenderFooter();
        echo $renderFooter->renderFooter();
    ?>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/custom/custom-script.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/form-layouts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>