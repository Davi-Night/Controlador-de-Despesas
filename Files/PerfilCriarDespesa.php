<?php
session_start();
require_once('dbConn.php');
$nome = $_GET['nome'];
$criador = $_SESSION['login'];


try
{
$sql = "INSERT INTO tipo_de_despesa (Descricao, Criador) VALUES ('$nome', '$criador')";
$stmt= $pdo->prepare($sql);
$stmt->execute();
echo $stmt->rowCount();

}
catch(Exception $e)
{
echo 0;
}
?>