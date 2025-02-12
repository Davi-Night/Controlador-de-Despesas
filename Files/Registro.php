<?php
require_once('dbConn.php');
$cpf = $_GET['cpf'];
$senha = $_GET['senha'];
$nome = $_GET['nome'];


try
{
$sql = "INSERT INTO pessoa (CPF, Nome, Senha, Administrador ) VALUES (?,?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$cpf, $nome, $senha, 0]);
echo $stmt->rowCount();

}
catch(Exception $e)
{
echo 0;
}
?>