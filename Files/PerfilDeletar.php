<?php
require_once('dbConn.php');
$id = $_GET['id'];
try
{
$sql = "DELETE FROM despesa WHERE Codigo='$id'";
$stmt= $pdo->prepare($sql);
$stmt->execute();
echo $stmt->rowCount();

}
catch(Exception $e)
{
echo 0;
}
?>