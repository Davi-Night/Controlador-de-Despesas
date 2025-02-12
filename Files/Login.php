<?php
require_once('dbConn.php');
$login = $_GET['login'];
$senha = $_GET['senha'];
$sql = "SELECT CPF, Senha FROM pessoa WHERE CPF='$login' and senha='$senha'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
sleep(1);
$count = $stmt->rowCount();
if ($count!=0)
{ 
 //Iniciando a sessão:
 if (session_status() !== PHP_SESSION_ACTIVE) {
 session_start();
 }
 //Gravando valores dentro da sessão aberta:
 $_SESSION['login'] = $login;
 $_SESSION['senha'] = $senha; 
}
echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
$pdo = null; 
?>