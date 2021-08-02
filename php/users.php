<?php 
   include ("conecta.php"); 
    $pdo = connect();
    $sql = "SELECT nomCom,id,nombre FROM user_control";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    echo json_encode($list);
 
    
?> 