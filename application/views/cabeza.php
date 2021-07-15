<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('js/metodo.js');?>"></script>
    <script src="<?php echo base_url('js/jquery.js');?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   
   
   
   
 
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-justified">  
  <div class="container-fluid">
    <h2 hidden>Bienvenido</h2>
    <ul class="navbar-nav">
    <li class="nav-item">
    <center>
    <a class="navbar-brand text-right" ><h2>Bienvenido</h2></a>
    </center>
    </li>
    </ul>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <span >
         
      
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav justify-content-end">
    
        <li class="nav-item dropdown  " >
        
          <a class="nav-link dropdown-toggle " href="#" id="ad" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?php echo base_url('img/man.png');?>">
            <?php
             $user =$this->session->userdata('user');
             $user = $user['nombre'];
             $user = substr($user, 0,strpos($user,' '));
             echo ucfirst($user);
           ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-right" style='width: 5px !important;' aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?php echo site_url('Inicio/cierra_sesion')?>">Salir</a></li>
            
          </ul></span>
        </li>
      </ul>
    </div>
  </div>
</nav>