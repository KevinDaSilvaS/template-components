<?php
session_start();

require_once ('Componentes'.DIRECTORY_SEPARATOR.'HandlerDataBase.php');
require_once ('Componentes'.DIRECTORY_SEPARATOR.'Redirect.php');

$redirecionar = new Redirecionar();
//POST VARIABLES 
#region INICIO DADOS BENEFICIARIO
$nomeBeneficiario = mysqli_real_escape_string($mysqli_connection, $_POST['nome']);

$cpf = mysqli_real_escape_string($mysqli_connection, $_POST['cpf']);

$rg = mysqli_real_escape_string($mysqli_connection, $_POST['rg']);

$dataNascimento = mysqli_real_escape_string($mysqli_connection, $_POST['dtnascimento']);

$email = mysqli_real_escape_string($mysqli_connection, $_POST['email']);

$senha = mysqli_real_escape_string($mysqli_connection, $_POST['senha']);

$cep = mysqli_real_escape_string($mysqli_connection, $_POST['cep']);

$estado = mysqli_real_escape_string($mysqli_connection, $_POST['estado']);

$cidade = mysqli_real_escape_string($mysqli_connection, $_POST['cidade']);

$endereco = mysqli_real_escape_string($mysqli_connection, $_POST['endereco']);

$patologias = mysqli_real_escape_string($mysqli_connection, $_POST['obs']);
#endregion FIM DADOS BENEFICIARIO

#region INICIO DADOS RESPONSAVEL
$nomeResponsavel = mysqli_real_escape_string($mysqli_connection, $_POST['nomeresponsavel']);

$cpfResponsavel = mysqli_real_escape_string($mysqli_connection, $_POST['cpfresponsavel']);

$rgResponsavel = mysqli_real_escape_string($mysqli_connection, $_POST['rgresponsavel']);

$parentesco = mysqli_real_escape_string($mysqli_connection, $_POST['parentesco']);

$emailResponsavel = mysqli_real_escape_string($mysqli_connection, $_POST['emailresponsavel']);

$foneResponsavel = mysqli_real_escape_string($mysqli_connection, $_POST['foneresponsavel']);
#endregion FIM DADOS RESPONSAVEL
$idBeneficiario = mysqli_real_escape_string($mysqli_connection, $_POST['action']);

$fields = "nome_beneficiario = '$nomeBeneficiario',cpf = '$cpf',rg = '$rg',
dt_nascimento = '$dataNascimento',email = '$email',cep = '$cep',estado = '$estado',
cidade = '$cidade',endereco = '$endereco',patologias = '$patologias',
nome_responsavel = '$nomeResponsavel',cpf_responsavel = '$cpfResponsavel',
rg_responsavel = '$rgResponsavel',parentesco = '$parentesco',
email_responsavel = '$emailResponsavel',telefone_responsavel = '$foneResponsavel'";

$handler = new HandlerDataBase();

$pesquisaEmail = $handler->selectCountWhere("email","cad_beneficiario","email = '$email' AND idcad_beneficiario != '$idBeneficiario'");

if ($pesquisaEmail <= 0) {
    $resposta = $handler->update("cad_beneficiario",$fields,"idcad_beneficiario = '$idBeneficiario'");
    $insereLogin = $handler->update("login","email = '$email',senha = '$senha'","email = '$email'");

    if ($resposta == 1 && $insereLogin == 1) {
        $_SESSION['sucess'] = true;
     }else {
        echo $resposta . " " . $insereLogin;
     }
}else {
    $_SESSION['usuarioexiste'] = true;
    echo $pesquisaEmail;
}

$redirecionar->redirect('ListaBeneficiario.php');

?>