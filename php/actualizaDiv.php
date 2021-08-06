<?php 
include ("conecta.php"); 
    $pdo = connect();
 

            $sql2="UPDATE app_menudetalle SET Menu='".$_POST['txt']."',Enlace='".$_POST['url']."',Icono='".$_POST['icon']."' WHERE idM='".$_POST['id']."' and Menu='".$_POST['txt2']."'";
            $query = $pdo->prepare($sql2);
            $query->execute(); 

          

        //echo("Menu ".$_POST['txt']." Enlace ".$_POST['url']." Icono  ".$_POST['icon']." idM ".$_POST['id']." Menu ".$_POST['txt2'] )
 
?>