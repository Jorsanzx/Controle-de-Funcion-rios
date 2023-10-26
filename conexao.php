<?php

//dados para conexão com o BD.
$dbHost = 'Localhost';
$dbUsername = 'Uniruy';
$dbPassword = '';
$dbProjeto = 'hrfrequency';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbProjeto);

if (!$conexao){
  die("Conexão Falhou: ". mysqli_connect());
}

?>

<!--
   Diferença entre mysql_connect e mysql_query


-->