<?php 
session_start();
require_once('dbConn.php');
$cpf = $_SESSION['login'];
$sql = "SELECT Codigo, Descricao FROM tipo_de_despesa WHERE Criador='Admin' OR Criador='$cpf'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
echo json_encode($stmt->fetchAll());
?>