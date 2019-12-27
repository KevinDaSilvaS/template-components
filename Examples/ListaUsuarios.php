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
    <title>Lista de Funções</title>
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
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'HandlerDataBase.php');
        require_once ('Componentes'.DIRECTORY_SEPARATOR.'ModalCreator.php');

        $message = new Notifications();
        if (isset($_SESSION['sucessoUsuario'])) { 
          echo $message->sucess('Sucesso!!','Usuario cadastrado com sucesso.');
          unset($_SESSION['sucessoUsuario']);
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
        <div class="col s12">
          <div class="container">
            <div class="section">
                <!-- Striped Table -->
                <div class="row">
                    <div class="col s12 m12 l12">
                    <div id="striped-table" class="card card card-default scrollspy grey lighten-3">
                        <div class="card-content">
                            <div class="col s12 ">
                                <h4 class="card-title">Cadastrar Funções</h4>
                                <form action="insereUsuario.php" method="POST">
                                    <div class="input-field col s6">
                                        <input id="email" name="email" class="input-field" type="email" required>
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="senha" name="senha" class="input-field" type="text" required>
                                        <label for="senha">Senha</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <button class="btn">Salvar
                                            <i class="large material-icons right">save</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col s12">
                                <h4 class="card-title">Lista de Funções</h4>
                                <form action="" method="POST">
                                    <div class="input-field col s8">
                                        <input id="pesquisa" name="pesquisa" class="input-field" type="text">
                                        <label for="pesquisa">Pesquisar Funções</label>
                                    </div>
                                    <div class="input-field col s4">
                                        <button class="btn" >
                                            Pesquisar
                                            <i class="large material-icons right">search</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <table class="centered striped grey lighten-2">
                                        <thead>
                                            <tr class="grey lighten-1 grey-text text-darken-3">
                                                <th data-field="id" >Email</th>
                                                <th data-field="name">Senha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php 
                                           $db = new HandlerDataBase();
                                           if (isset($_POST['pesquisa'])) {

                                              $pesquisa = mysqli_real_escape_string($mysqli_connection,$_POST['pesquisa']);
                                              $condicional = " email LIKE '%$pesquisa%' AND nivel = '6'";
                                              $dadosPesquisa = $db->selectWhere("*","login",$condicional);

                                           }else {
                                              $dadosPesquisa = $db->selectWhere("*"," login ","nivel = '6' ORDER BY idlogin DESC "); 
                                           }
                                          if (is_array($dadosPesquisa)) {
                                            foreach ($dadosPesquisa as $key => $value) {
                                                
                                            ?>
                                                <tr class="grey-text text-darken-3">
                                                    <td><?php echo $value['email'];?></td>
                                                    <td><?php echo $value['senha'];?></td>
                                                  
                                                </tr>
                                     <?php }
                                         } ?>
                                        </tbody>
                                    </table>
                               </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
    </div>
        </div>
      </div>
    </div>
<!-- END: Page Main-->

    <?php
        $renderFooter = new RenderFooter();
        echo $renderFooter->renderFooter();
    ?>

    <script src="JS/buscaCep.js"></script>
    <script src="JS/mascaras.js"></script>
    <script src="JS/modal-ini.js"></script>
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
    <!-- END PAGE LEVEL JS-->
  </body>
</html>