<?php 
   include ("conecta.php"); 
    $pdo = connect();
    //$sql = "SELECT TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(hora))), '%H:%i:%s') as hrs FROM tiempo where nombre='".$_POST['nomb']."'";
    $sql = "SELECT dia,h_inicio from tiempo where nombre='".$_POST['nomb']."' and play=1";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    
    if($query->rowCount() >0){
     
          foreach ($list as $rs) {
               echo($rs['h_inicio']."|".$rs['dia']);
          }
          /* echo json_encode($list);*/
    }else{ 
         echo(0);
    }

 
    
?>  