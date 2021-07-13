
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My sitio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
 integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
   
  </head>
  <body >

    <div class="container">
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
 

  <style>
    .containerOwnApp {
   box-shadow: 0 0 27px 0 rgba(84, 84, 84, 0.62);
   padding-top: 15px;
}
 
.login-page {
  padding: 15% 0 0;
  margin: 0 auto 100px;
  max-width: 380px;
  position: relative;
}
 
.login-form {
   box-shadow: 0 0 27px 0 rgba(84, 84, 84, 0.62);
}
 
.login-form-header {
   padding-top: 32px;
}
 
.login-from-row {
   padding-top: 20px;
   padding-bottom: 20px;
}
 
.login-form-font-header {
   font-size:45px; 
   font-weight: bold;
}
 
.login-form-font-header span {
   color: #007C9B;
}
  </style>
</html>