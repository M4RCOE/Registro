<?php 
include ("conecta.php"); 
 
 
    $pdo = connect();
    $sql = "SELECT nomMenu,idM,usuario from ca_dispositivos";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    echo json_encode($list);

?>