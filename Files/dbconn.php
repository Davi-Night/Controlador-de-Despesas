<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'despesas';
 $dsn = "mysql:host={$host};port=3306;dbname={$banco};charset=utf8";
try {
//$pdo = new PDO($dsn, $usuario, $senha);
 $pdo = new PDO($dsn, $usuario, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} 
catch (PDOException $e) { 
die($e->getMessage());
}
?>