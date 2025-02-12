<?php 
session_start();
require_once('dbConn.php');
$filtro ="";
$inicial = $_GET['inicial'];
$final = $_GET['final'];
$valor = $_GET['valor'];
$despesa = $_GET['despesa'];
$valorfilt = $_GET['valorfilt'];
if($_GET['inicial'] != "" && $_GET['final'] != "")
$filtro = "AND (dataPagamneto BETWEEN '$inicial' AND '$final')";
if($_GET['valor'] != "")
{
    if($valorfilt==="Igual")
    $filtro = "AND Valor = '$valor' $filtro";
    if($valorfilt==="Maior")
    $filtro = "AND Valor > '$valor' $filtro";
    if($valorfilt==="Menor")
    $filtro = "AND Valor < '$valor' $filtro";
}
if($_GET['despesa'])
$filtro = "AND d.Codigo_Tipo_Despesas='$despesa' $filtro";

$cpf = $_SESSION['login'];
$sql = "SELECT d.Codigo as dCodigo, Descricao, dataPagamneto, Valor FROM despesa d, tipo_de_despesa t WHERE d.Codigo_Tipo_Despesas = t.Codigo AND CPF ='$cpf' $filtro";
$stmt = $pdo->prepare($sql);
$stmt->execute();
echo json_encode($stmt->fetchAll());
?>