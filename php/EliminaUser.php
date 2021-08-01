<?php 
include ("conecta.php"); 
 
 
    $pdo = connect();
    $sql = "delete from usuarios where id='".$_POST['id']."'";
    $query = $pdo->prepare($sql);
    $query->execute();
?>