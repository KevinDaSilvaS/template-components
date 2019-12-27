<?php

class RenderMenu
{
    public function __construct()
    {
        
    }

    public function renderMenu($tipo = 2)
    {
        switch ($tipo) {
            case 1:
                $menu = '
                <!-- BEGIN: SideNav-->
                <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded  blue-grey lighten-2 z-depth-1">
                    <div class="brand-sidebar blue-grey lighten-2">
                    </div>
                    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" 
                    data-menu="menu-navigation" data-collapsible="accordion">
                        <li class="bold"><a class="waves-effect waves-cyan " href="CadastroEmpresa.php"><i class="material-icons">view_array</i>
                        <span class="menu-title" data-i18n="">Cadastro Empresa</a>
                        </li>

                        <li class="bold"><a class="waves-effect waves-cyan " href="ListaEmpresa.php"><i class="material-icons">view_array</i>
                        <span class="menu-title" data-i18n="">Lista de Empresas</a>
                        </li>

                        <li class="bold"><a class="waves-effect waves-cyan " href="logout.php"><i class="material-icons">exit_to_app</i>
                        <span class="menu-title" data-i18n="">Logout</a>
                        </li>
                    </ul>
                    <div class="navigation-background"></div><a class="sidenav-trigger 
                    b0 tn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
                    href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
                </aside>
                <!-- END: SideNav-->
                ';
                break;

            case '2':
                $menu = '
                <!-- BEGIN: SideNav-->
                <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded  blue-grey lighten-2 z-depth-1">
                    <div class="brand-sidebar blue-grey lighten-2">
                    </div>
                    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" 
                    data-menu="menu-navigation" data-collapsible="accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">view_array</i><span class="menu-title" data-i18n="">
                        RH</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                <li><a class="collapsible-body" href="CadastroFuncionario.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Funcionario</span></a>
                                </li>

                                <li><a class="collapsible-body" href="CadastroHorarios.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Horários</span></a>
                                </li>

                                <li><a class="collapsible-body" href="CadastroEscala.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Escalas</span></a>
                                </li>

                                <li><a class="collapsible-body" href="CadastroDescontos.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Descontos</span></a>
                                </li>

                                <li><a class="collapsible-body" href="CadastroVales.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Vales</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaFuncionarios.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Funcionarios</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaFuncoes.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Funções</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaHorarios.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Horários</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaEscalas.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Escalas</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaDesconto.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Descontos</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaVale.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Vales</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaFolhas.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Folhas</span></a>
                                </li>
                            </ul>
                        </div>
                        </li>
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#"><i class="material-icons">business</i>
                        <span class="menu-title" data-i18n="">Administrativo</span></a>
                        <div class="collapsible-body">
                            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                <li><a class="collapsible-body" href="CadastroContratante.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Contratante</span></a>
                                </li>

                                <li><a class="collapsible-body" href="CadastroBeneficiario.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Beneficiário</span></a>
                                </li>

                                <li><a class="collapsible-body" href="CadastroMedicamento.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Medicamento</span></a>
                                </li>

                                <li><a class="collapsible-body" href="CadastroEquipamento.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Equipamento</span></a>
                                </li>

                                <li><a class="collapsible-body" href="CadastroProdutos.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Produtos</span></a>
                                </li>

                                <li><a class="collapsible-body" href="CadastroContrato.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Contrato</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaContratante.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Contratantes</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaContratante.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Contratantes</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaMedicamento.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Medicamento</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaEquipamento.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Equipamento</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaProdutos.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista de Produto</span></a>
                                </li>

                                <li><a class="collapsible-body" href="ListaContratos.php" data-i18n="">
                                <i class="material-icons">radio_button_unchecked</i><span>Lista Contratos</span></a>
                                </li>
                                
                            </ul>
                        </div>
                        </li>
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan " href="#">
                        <i class="material-icons">business_center</i><span class="menu-title" data-i18n="">
                        Financeiro</span></a>
                            <div class="collapsible-body">
                                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                                    <li><a class="collapsible-body" href="CadastroBanco.php" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Bancos</span></a>
                                    </li>

                                    <li><a class="collapsible-body" href="CadastroDeContas.php" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Contas</span></a>
                                    </li>

                                    <li><a class="collapsible-body" href="CadastroCartao.php" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Cartão</span></a>
                                    </li>

                                    <li><a class="collapsible-body" href="CadastroFornecedor.php" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Cadastro de Fornecedores</span></a>
                                    </li>

                                    <li><a class="collapsible-body" href="ListaBanco.php" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Lista de Bancos</span></a>
                                    </li>

                                    <li><a class="collapsible-body" href="ListaContas.php" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Lista de Contas</span></a>
                                    </li>

                                    <li><a class="collapsible-body" href="ListaCartao.php" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Lista de Cartões</span></a>
                                    </li>

                                    <li><a class="collapsible-body" href="ListaFornecedores.php" data-i18n="">
                                    <i class="material-icons">radio_button_unchecked</i><span>Lista de Fornecedores</span></a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="waves-effect waves-cyan " href="Contato.php"><i class="material-icons">bug_report</i>
                        <span class="menu-title" data-i18n="">Ajuda</a>
                        </li>
                        <li class="bold"><a class="waves-effect waves-cyan " href="logout.php"><i class="material-icons">exit_to_app</i>
                        <span class="menu-title" data-i18n="">Logout</a>
                        </li>
                    </ul>
                    <div class="navigation-background"></div><a class="sidenav-trigger 
                    b0 tn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
                    href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
                </aside>
                <!-- END: SideNav-->
                ';
                break;

            case '3':
                $menu = '
                <!-- BEGIN: SideNav-->
                <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded  blue-grey lighten-2 z-depth-1">
                    <div class="brand-sidebar blue-grey lighten-2">
                    </div>
                    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" 
                    data-menu="menu-navigation" data-collapsible="accordion">
                        <li class="bold"><a class="waves-effect waves-cyan " href="logout.php"><i class="material-icons">exit_to_app</i>
                        <span class="menu-title" data-i18n="">Logout</a>
                        </li>
                    </ul>
                    <div class="navigation-background"></div><a class="sidenav-trigger 
                    b0 tn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
                    href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
                </aside>
                <!-- END: SideNav-->
                ';
                break;

            case '4':
                header('Location: logout.php');
                break;

            case '5':
                header('Location: logout.php');
                break;
            
            default:
                header('Location: logout.php');
                break;
        }
/*         $menu = '
        <!-- BEGIN: SideNav-->
        <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded  blue-grey lighten-2 z-depth-1">

        </aside>
        <!-- END: SideNav-->
        '; */

        return $menu;
    }
}

?>