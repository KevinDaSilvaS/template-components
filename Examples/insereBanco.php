<?php
session_start();

require_once ('Componentes'.DIRECTORY_SEPARATOR.'HandlerDataBase.php');
require_once ('Componentes'.DIRECTORY_SEPARATOR.'Redirect.php');

$redirecionar = new Redirecionar();
//POST VARIABLES 
$nomeBanco = mysqli_real_escape_string($mysqli_connection, $_POST['nomebanco']);

$agencia = mysqli_real_escape_string($mysqli_connection, $_POST['numeroagencia']);

$digitoAgencia = mysqli_real_escape_string($mysqli_connection, $_POST['digitoagencia']);

$numeroConta = mysqli_real_escape_string($mysqli_connection, $_POST['numeroconta']);

$digitoConta = mysqli_real_escape_string($mysqli_connection, $_POST['digitoconta']);

$numeroFinalAgencia = $agencia . '-' . $digitoAgencia;
$numeroFinalConta = $numeroConta . '-' . $digitoConta;

$fields = "nome_banco,numero_agencia,numero_conta";
$values = "'$nomeBanco','$numeroFinalAgencia','$numeroFinalConta'";

$handler = new HandlerDataBase();

$resposta = $handler->insertFields("cad_banco",$fields,$values);

if ($resposta == 1) {
    $_SESSION['sucessoBanco'] = true;
    $redirecionar->redirect('ListaBanco.php');
}else {
    echo $resposta;
}

?>