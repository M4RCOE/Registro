<?php 
include ("conecta.php"); 
    $pdo = connect();

	
try {
	 foreach($_POST['nombre'] as $key => $use){
	$sql = "INSERT INTO app_menudetalle (Menu, idM, Nivel,Icono) VALUES (:Menu,:idM,:Nivel,:Icono)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':Menu', $use[0], PDO::PARAM_STR);
	$query->bindParam(':idM', $_POST['id'], PDO::PARAM_STR);
	$query->bindParam(':Nivel', $use[1], PDO::PARAM_STR); 
	$query->bindParam(':Icono', $use[2], PDO::PARAM_STR); 
	$query->execute();
	}
	
	//echo('nombre: '.$_POST['nombre'].'idM: '.$_POST['id'].'Nivel: '.$_POST['pos'] );
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
	
}

?>