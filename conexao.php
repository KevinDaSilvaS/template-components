<?php


$mysqli_connection =new MySQLi(HOST, USER, PASSWOR, DB,PORT(OPTIONAL)) ;
if ($mysqli_connection->connect_error) {
   
    echo "Error:".$mysqli_connection->connect_error;
}else {
    //echo "conected";
}
?>
