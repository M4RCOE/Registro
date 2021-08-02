<?php 
include ("conecta.php"); 
    $pdo = connect();
 
             
            $sql2="UPDATE app_menudetalle SET Menu='".$_POST['txt']."',Enlace='".$_POST['url']."' WHERE idM='".$_POST['id']."' and Menu='".$_POST['txt2']."'";
            $query = $pdo->prepare($sql2);
            $query->execute(); 
            //echo($_POST['txt']." ".$_POST['url']." ".$_POST['id']." ".$_POST['txt2'])
 
?>