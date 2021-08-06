<?php 
include ("conecta.php"); 
    $pdo = connect();
 

          

            $sql="select Usuario from app_menu where idM=".$_POST['id'].""
            $query = $pdo->prepare($sql);
            $query->execute();
            $list = $query->fetchAll();
            echo json_encode($list);


        //echo("Menu ".$_POST['txt']." Enlace ".$_POST['url']." Icono  ".$_POST['icon']." idM ".$_POST['id']." Menu ".$_POST['txt2'] )
 
?>