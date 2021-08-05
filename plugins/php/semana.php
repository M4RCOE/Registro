<?php 
   include ("conecta.php"); 
    $pdo = connect();
    $sql = "SELECT TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(hora))), '%H:%i:%s') as hrs,dia FROM tiempo WHERE WEEK (dia) = WEEK( current_date )-1 AND YEAR( dia) = YEAR( current_date ) AND nombre='".$_POST['nomb']."'GROUP BY dia";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $rs) {
         echo(",".$rs['hrs'].",".$rs['dia']);
    }
 
    
?> 