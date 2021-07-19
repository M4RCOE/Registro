<?php 
   include ("conecta.php"); 
    $pdo = connect();
    //$sql = "SELECT TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(hora))), '%H:%i:%s') as hrs FROM tiempo where nombre='".$_POST['nomb']."'";
    $sql = "SELECT nombre,TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(hora))), '%H:%i') as hrs FROM tiempo WHERE MONTH(dia) = MONTH(CURRENT_DATE()) AND YEAR(dia) = YEAR(CURRENT_DATE())AND nombre='".$_POST['nomb']."'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $rs) {
         echo($rs['hrs']);
    }
 
    
?>    
