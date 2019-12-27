<?php
session_start();

isset($_SESSION["tipo"]) ? $tipo = $_SESSION["tipo"] : header('Location: logout.php');
isset($_SESSION["iduser"]) ? $id = $_SESSION["iduser"] : header('Location: logout.php');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5af39d1c5f7cdf4f05340368/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Contato</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/fontawesome/css/all.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-contact.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 2-columns  " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php 
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderHeader.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderMenu.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'renderFooter.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'Notifications.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'HandlerDataBase.php');

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
      <div class="row">
        <div class="content-wrapper-before blue-grey lighten-5"></div>
        <div class="col s12">
          <div class="container">
            <!-- Contact Us -->
<div id="contact-us" class="section">
  <div class="app-wrapper">
    <div class="contact-header">
      <div class="row contact-us">
        <div class="col s12 m12 l4 sidebar-title">
          <h5 class="m-0"><i class="material-icons contact-icon vertical-text-top">mail_outline</i> Precisando de ajuda?</h5>
          <p class="m-0 font-weight-500 mt-6 hide-on-med-and-down text-ellipsis">clique na barra azul no canto direito da tela </p>
          <p class="m-0 font-weight-500 mt-6 hide-on-med-and-down text-ellipsis">para iniciar seu suporte</p>
        </div>
        <div class="col s12 m12 l8 form-header">
          <h6 class="form-header-text"><i class="material-icons"> mail_outline </i> Nos mande um olá no chat e vamos solucionar o seu problema</h6>
        </div>
      </div>
    </div>

    <!-- Contact Sidenav -->
    <div id="sidebar-list" class="row contact-sidenav">
      <div class="col s12 m12 l4">
        <!-- Sidebar Area Starts -->
        <div class="sidebar-left sidebar-fixed">
          <div class="sidebar">
            <div class="sidebar-content">  
          </div>
        </div>
        <!-- Sidebar Area Ends -->
      </div>
    </div>
  </div>
</div><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
   <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
      <div class="row">
         <div class="slide-out-right-title">
            <div class="col s12 border-bottom-1 pb-0 pt-1">
               <div class="row">
                  <div class="col s2 pr-0 center">
                     <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                  </div>
                  <div class="col s10 pl-0">
                     <ul class="tabs">
                        <li class="tab col s4 p-0">
                           <a href="#messages" class="active">
                              <span>Messages</span>
                           </a>
                        </li>
                        <li class="tab col s4 p-0">
                           <a href="#settings">
                              <span>Settings</span>
                           </a>
                        </li>
                        <li class="tab col s4 p-0">
                           <a href="#activity">
                              <span>Activity</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-out-right-body">
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
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
    <script src="../../../app-assets/js/scripts/page-contact.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>