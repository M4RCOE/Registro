<?php 
include ("conecta.php"); 
    $pdo = connect();
 
    //echo("UPDATE tiempo SET h_fin='".$_POST['hr_f']."' WHERE id='".$rs['id']."'");
    $sql2="UPDATE app_menu SET Usuario='".$_POST['nombre']."' WHERE nomMenu='".$_POST['menu']."'";
    $query = $pdo->prepare($sql2);
    $query->execute(); 
           
        
    


 //echo("nom: ".$_POST['nomb']."hrs: ".$_POST['hr_f']."t: ".$_POST['tiempo']) 
?>