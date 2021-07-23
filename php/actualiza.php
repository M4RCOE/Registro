<?php 
include ("conecta.php"); 
    $pdo = connect();
    $sql = "SELECT * FROM tiempo WHERE nombre='".$_POST['nomb']."' ORDER BY id DESC LIMIT 1  ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $list = $query->fetchAll();
    foreach ($list as $rs) {
         
        if(empty($rs['h_fin'])){
            //echo("UPDATE tiempo SET h_fin='".$_POST['hr_f']."' WHERE id='".$rs['id']."'");
            $sql2="UPDATE tiempo SET h_fin='".$_POST['hr_f']."',play=0,hora='".$_POST['tiempo']."' WHERE id='".$rs['id']."'";
            $query = $pdo->prepare($sql2);
            $query->execute(); 
           
        }
    }


 //echo("nom: ".$_POST['nomb']."hrs: ".$_POST['hr_f']."t: ".$_POST['tiempo']) 
?>