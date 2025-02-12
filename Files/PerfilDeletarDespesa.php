<?php
session_start();
require_once('dbConn.php');
$id = $_GET['id'];
$criador = $_SESSION['login'];

$sql = "SELECT * FROM despesa WHERE Codigo_Tipo_Despesas='$id'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$count = $stmt->rowCount();
if ($count < 1)
{
try
{
$sql = "DELETE FROM tipo_de_despesa WHERE Codigo='$id' AND Criador = '$criador'";
$stmt= $pdo->prepare($sql);
$stmt->execute();
echo $stmt->rowCount();

}
catch(Exception $e)
{
echo 0;
}
}
else
echo 3
?>