<?php 
include ("conecta.php"); 
    $pdo = connect();
     
    $sql2="SELECT * FROM app_menudetalle JOIN app_menu ON app_menudetalle.idM=app_menu.idM WHERE Usuario =(SELECT nomCom FROM user_control WHERE nombre='".$_POST['user']."')";
    $query = $pdo->prepare($sql2);
    $query->execute(); 
    $list = $query->fetchAll();
    echo json_encode($list);
    


 
?>