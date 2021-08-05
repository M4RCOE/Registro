<?php 
include ("conecta.php"); 
    $pdo = connect();
     
    $sql2="UPDATE user_control SET nomCom='".$_POST['nombre']."',nombre='".$_POST['alias']."',Correo='".$_POST['email']."' WHERE id='".$_POST['id']."'";
    $query = $pdo->prepare($sql2);
    $query->execute(); 
     
        
    


 //echo("nom: ".$_POST['nomb']."hrs: ".$_POST['hr_f']."t: ".$_POST['tiempo']) 
?>