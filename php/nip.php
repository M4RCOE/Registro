<?php 
include ("conecta.php"); 
 
 
    $pdo = connect();
    $sql = "SELECT clave from usuarios where nomCom='".$_POST['nom']."'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    echo json_encode($list);

?>