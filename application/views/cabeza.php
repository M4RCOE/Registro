<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="<?php echo base_url('js/jquery.js');?>"></script>
    
  
    <link rel="stylesheet" type='text/css'  href="<?php echo base_url('css/estilos.css');?>">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
   
   
   
 
  </head>
  <body>
  <input type="text" id='url_sitio' value='<?php echo base_url()?>'hidden>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-justified">  
  <div class="container-fluid">
    <h2 hidden>Bienvenido</h2>
    <ul class="navbar-nav">
    <li class="nav-item">
    <script src="<?php echo base_url('js/metodo.js');?>"></script>
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
        
          
          


            <?php
            if($this->session->userdata('user')){
              ?>
                     <div class="dropdown">
  <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color:white;'>

              <img src="<?php echo base_url('img/man.png');?>">
              <?php
            $user =$this->session->userdata('user');
            $user = $user['nombre'];
            $user = substr($user, 0,strpos($user,' '));
            echo ucfirst($user);
            ?>
                 
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="<?php echo site_url('Inicio/cierra_sesion')?>">Salir</a>
  <a class="dropdown-item" href="<?php echo site_url('Inicio/admin')?>">Dashboard</a>
    
  </div>
</div>
             <?php
            }else{
            echo("<ul class='navbar-nav mr-auto '>");
            echo("<li class='nav-item active'>");
           
            echo(" <a class='text-secondary' href='".site_url('Inicio/iniciar_sesion')."'>Iniciar Sesión </a>");
             
            echo('</li>');
            echo('</ul>');
            
            
            }
             
           ?>
           
   
           </span>
        </li>
      </ul>
    </div>
  </div>
</nav>