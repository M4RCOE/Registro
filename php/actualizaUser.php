<?php 
include ("conecta.php"); 
    $pdo = connect();
     
    $sql2="UPDATE usuarios SET nomCom='".$_POST['nombre']."',nombre='".$_POST['alias']."' WHERE nomCom='".$_POST['nombre']."'";
    $query = $pdo->prepare($sql2);
    $query->execute(); 
     
        
    


 //echo("nom: ".$_POST['nomb']."hrs: ".$_POST['hr_f']."t: ".$_POST['tiempo']) 
?>