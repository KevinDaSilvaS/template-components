<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'sevite');

$mysqli_connection =new MySQLi(HOST, USUARIO, SENHA, DB,3308) ;
if ($mysqli_connection->connect_error) {
    # code...
    echo "desconectado Erro:".$mysqli_connection->connect_error;
}else {
    //echo "conectado";
}
?>