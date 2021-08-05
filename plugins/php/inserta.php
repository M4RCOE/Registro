<?php 
include ("conecta.php"); 
    $pdo = connect();
try {
	 
	$sql = "INSERT INTO tiempo (nombre, hora, dia, h_inicio,play) VALUES (:nombre,:hora,:dia,:h_inicio,:play)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':nombre', $_POST['nomb'], PDO::PARAM_STR);
	$query->bindParam(':hora', $_POST['tiempo'], PDO::PARAM_STR);
	$query->bindParam(':dia', $_POST['fech'], PDO::PARAM_STR);
	$query->bindParam(':h_inicio', $_POST['hr_i'], PDO::PARAM_STR);
	$query->bindParam(':play', $_POST['play'], PDO::PARAM_STR); 
	$query->execute();
	echo('nombre: '.$_POST['nomb'].'hora: '.$_POST['tiempo'].'h_inicio: '.$_POST['hr_i'].'play: '.$_POST['play']);
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
	
}

?>