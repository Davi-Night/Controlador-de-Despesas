<?php 
session_start();
require_once('dbConn.php');
$cpf = $_SESSION['login'];
$sql = "SELECT CPF, Nome FROM pessoa WHERE CPF='$cpf'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
echo json_encode($stmt->fetchAll());
?>
