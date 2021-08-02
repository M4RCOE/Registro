<?php 
include ("conecta.php"); 
 
 
    $pdo = connect();
    $sql = "delete from user_control where id='".$_POST['id']."'";
    $query = $pdo->prepare($sql);
    $query->execute();
?>