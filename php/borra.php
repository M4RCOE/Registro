<?php 
include ("conecta.php"); 
 
 
    $pdo = connect();
    $sql = "delete from app_menudetalle where idM='".$_POST['id']."'";
    $query = $pdo->prepare($sql);
    $query->execute();
?>