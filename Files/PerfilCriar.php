<?php
require_once('dbConn.php');
$despesa = $_GET['despesa'];
$valor = $_GET['valor'];
$data = $_GET['data'];
$cpf = $_GET['cpf'];
try
{
$sql = "INSERT INTO despesa (dataPagamneto, Valor, Codigo_Tipo_Despesas, CPF) VALUES (?,?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$data, $valor, $despesa, $cpf]);
echo $stmt->rowCount();

}
catch(Exception $e)
{
echo 0;
}
?>