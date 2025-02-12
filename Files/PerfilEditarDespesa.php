<?php
require_once('dbConn.php');
$id = $_GET['id'];
$nome = $_GET['nome'];
try
{
$sql = "UPDATE tipo_de_despesa SET Descricao = '$nome' WHERE Codigo='$id'";
$stmt= $pdo->prepare($sql);
$stmt->execute();
echo $stmt->rowCount();

}
catch(Exception $e)
{
echo 0;
}
?>