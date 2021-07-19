<?php 
include ("conecta.php"); 
    $pdo = connect();
try {
	$sql = "INSERT INTO tiempo (nombre, hora, dia, h_inicio) VALUES (:nombre,:hora,:dia,:h_inicio)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':nombre', $_POST['nomb'], PDO::PARAM_STR);
	$query->bindParam(':hora', $_POST['tiempo'], PDO::PARAM_STR);
	$query->bindParam(':dia', $_POST['fech'], PDO::PARAM_STR);
	$query->bindParam(':h_inicio', $_POST['hr_i'], PDO::PARAM_STR);
	 
	$query->execute();
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
}
?>