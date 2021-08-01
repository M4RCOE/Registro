<?php 
include ("conecta.php"); 
    $pdo = connect();
try {
	 
	$sql = "INSERT INTO app_menu (nomMenu, Fecha) VALUES (:nomMenu,:Fecha)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':nomMenu', $_POST['menu'], PDO::PARAM_STR);
	$query->bindParam(':Fecha', $_POST['fecha'], PDO::PARAM_STR);
	$query->execute();
	//echo('nombre: '.$_POST['menu'].'Usuario: '.$_POST['nombre'].'Fecha: '.$_POST['fecha'] );
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
	
}

?>