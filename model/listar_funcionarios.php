<?php

require_once '../model/m_connection.php';

$sql = $pdo->prepare("SELECT * FROM funcionarios");

$sql->execute();

$funcionarios = $sql->fetchAll();

?>