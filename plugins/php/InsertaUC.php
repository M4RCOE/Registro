<?php 
include ("conecta.php"); 
$pdo = connect();

 echo $_FILES['file']['tmp_name'];
    if(!empty($_FILES['file']['name'])){
         
        $uploadedFile = '';
        if(!empty($_FILES["file"]["type"])){
            $temporary = explode(".", $_FILES["file"]["name"]);
            $file_extension = end($temporary);
            $fileName = time().''.rand(100000,999999).''.time().'.'.$file_extension;
            $valid_extensions = array("jpeg", "jpg", "png");
            if((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
                $sourcePath = $_FILES['file']['tmp_name'];
                $targetPath = $_SERVER['DOCUMENT_ROOT']."/residencia/img/".$fileName;
                if(move_uploaded_file($sourcePath,$targetPath)){
                    $uploadedFile = $fileName;
                }
            }
        }
    }
        if(!empty($_FILES["file"]["type"])){
            $subir = substr_replace($targetPath,"",0,strlen($_SERVER['DOCUMENT_ROOT']."/residencia/"));
        }else{
            $subir = "img/user.png";
        }

    $sql = "INSERT INTO user_control (nombre,clave,nomCom,Correo,img_user) VALUES (:nombre,:clave,:nomCom,:Correo,:img_user)";
                    $query = $pdo->prepare($sql);
                    $query->bindParam(':nombre', $_POST['alias'] , PDO::PARAM_STR);
                    $query->bindParam(':clave', $_POST['cve'], PDO::PARAM_STR);
                    $query->bindParam(':nomCom', $_POST['nombre'], PDO::PARAM_STR); 
                    $query->bindParam(':Correo', $_POST['email'], PDO::PARAM_STR); 
                    $query->bindParam(':img_user', $subir); 
                    $query->execute();
  //  echo("nom ".$_POST['nombre']." cve ".$_POST['cve']." alias ".$_POST['alias']." email ".$_POST['email']." img ".$targetPath);
?>