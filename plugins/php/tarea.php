<?php 
include ("conecta.php"); 
    $pdo = connect();
try {
	$sql = "INSERT INTO tareas (residente, tarea, estado,fecha) VALUES (:residente,:tarea,:estado,:fecha)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':residente', $_POST['nomb'], PDO::PARAM_STR);
	$query->bindParam(':tarea', $_POST['tarea'], PDO::PARAM_STR);
	$query->bindParam(':estado', $_POST['estado'], PDO::PARAM_STR);
	$query->bindParam(':fecha', $_POST['fech'], PDO::PARAM_STR);

	
	$query->execute();
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
}
echo($_POST['nomb'].' '.$_POST['tarea'].' '.$_POST['estado'].' '.$_POST['fech'])
?>