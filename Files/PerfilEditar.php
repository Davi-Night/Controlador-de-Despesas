<?php
require_once('dbConn.php');
$id = $_GET['id'];
$despesa = $_GET['despesa'];
$valor = $_GET['valor'];
$data = $_GET['data'];
try
{
$sql = "UPDATE despesa SET dataPagamneto = '$data', Valor='$valor', Codigo_Tipo_Despesas='$despesa' WHERE Codigo='$id'";
$stmt= $pdo->prepare($sql);
$stmt->execute();
echo $stmt->rowCount();

}
catch(Exception $e)
{
echo 0;
}
?>