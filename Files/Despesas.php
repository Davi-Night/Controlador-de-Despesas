<?php 
session_start();
require_once('dbConn.php');
$cpf = $_SESSION['login'];
$sql = "SELECT d.Codigo as dCodigo, Descricao, dataPagamneto, Valor FROM despesa d, tipo_de_despesa t WHERE d.Codigo_Tipo_Despesas = t.Codigo AND CPF ='$cpf'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
echo json_encode($stmt->fetchAll());
?>