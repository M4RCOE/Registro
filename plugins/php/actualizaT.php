<?php 
include ("conecta.php"); 
 
        $pdo = connect();
        $sql="UPDATE tareas SET residente='".$_POST['nombre']."',tarea='".$_POST['tarea']."',comentario='".$_POST['comentario']."',fecha='".$_POST['fecha']."',estado='".$_POST['estado']."' WHERE id_tarea='".$_POST['id_tarea']."'";
        $query = $pdo->prepare($sql);
        $query->execute(); 
           
         
//echo("nom: ".$_POST['nombre']."tarea: ".$_POST['tarea']."fecha: ".$_POST['fecha']."comentario: ".$_POST['comentario']."estado: ".$_POST['estado']) 
?>