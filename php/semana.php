<?php 
   include ("conecta.php"); 
    $pdo = connect();
    $sql = "SELECT TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(hora))), '%H:%i:%s') as hrs,WEEKDAY(dia)as dia FROM  tiempo WHERE YEARWEEK(dia) = YEARWEEK(CURDATE()) AND nombre='".$_POST['nomb']."'GROUP BY dia";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    echo json_encode($list);
    /* foreach ($list as $rs) {
         echo(",".$rs['hrs'].",".$rs['dias']);
    } */
 
    
?> 