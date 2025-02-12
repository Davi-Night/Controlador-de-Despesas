<?php 
session_start();
require_once('dbConn.php');
$cod = $_GET['dado'];
$cod = "($cod)";
$cpf = $_SESSION['login'];
$sql = "SELECT Descricao, COUNT(Descricao) AS Quantidade FROM despesa d, tipo_de_despesa t WHERE d.Codigo_Tipo_Despesas = t.Codigo AND CPF ='$cpf' and d.codigo in $cod  GROUP BY Descricao";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$dados = array();
foreach ($stmt as $row)
{
    $Desp_Count = array();
    $Desp_Count[] = ((string) $row['Descricao']);
    $Desp_Count[] = ((int) $row['Quantidade']);
    $dados[] = ($Desp_Count);

}
  $jsonTable = json_encode($dados);

  echo $jsonTable;
  $pdo = null;
?>