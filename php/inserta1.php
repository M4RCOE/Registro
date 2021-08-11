<?php 
include ("conecta.php"); 
    $pdo = connect();

	
try {
	 foreach($_POST['hijos'] as $key => $use){
	$sql = "INSERT INTO app_menudetalle (Menu, idM,Enlace,Icono,Nivel) VALUES ('".$use[0]."',".$_POST['id'].",'".$use[2]."','".$use[3]."',".$use[1].")";
	$query = $pdo->prepare($sql);
	$query->execute();
	}
	$sql2 = "select nombre from  user_control where nomCom =(select Usuario from app_menu where idM=".$_POST['id'].")";
	$query = $pdo->prepare($sql2);
	$query->execute();
	$list = $query->fetchAll();
    foreach ($list as $rs) {
		echo($rs['nombre']);
   }
	
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
	
}

?>