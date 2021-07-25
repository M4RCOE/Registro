<?php 
   include ("conecta.php"); 
    $pdo = connect();
    //$sql = "SELECT TIME_FORMAT(SEC_TO_TIME(SUM(TIME_TO_SEC(hora))), '%H:%i:%s') as hrs FROM tiempo where nombre='".$_POST['nomb']."'";
    $sql = "SELECT * from tareas where residente='".$_POST['nomb']."' and estado='Activa'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();

    if($query->rowCount() >0){
    /* foreach ($list as $rs) {

         echo($rs['tarea']."|".$rs['fecha']."|".$rs['id_tarea']."|".$rs['residente']."|");
    } */
    echo json_encode($list);
}else{
     echo 0;
}
    
?>   