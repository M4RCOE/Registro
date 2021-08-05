
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My sitio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
 integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     
    <link rel="stylesheet" type='text/css'  href="<?php echo base_url('css/estilo_login.css');?>">
   
  </head>
  <body >

    <div class="container ">
        <div class="row text-center login-page">
	   <div class="col-md-12 login-form">
	      <form action="<?php echo site_url('Inicio/valida')?>" method="post"> 			
	         <div class="row">
		    <div class="col-md-12 login-form-header">
		       <p class="login-form-font-header">Iniciar <span>Sesion </span><p>
		    </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
		      <input name="nombre" type="text" placeholder="Usuario" required/>
		   </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
		      <input name="cve" type="password" placeholder="Contraseña" required/>
		   </div>
		</div>
		<div class="row">
		   <div class="col-md-12 login-from-row">
       <input class="btn btn-primary" type="submit" name="" value="Login"><br><br>
		   </div>
		</div>
	    </form>
	</div>
     </div>
  </div>
  </body>
 


</html>